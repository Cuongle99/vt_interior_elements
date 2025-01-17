<?php
/**
 * 2007-2015 Leotheme
 *
 * NOTICE OF LICENSE
 *
 *  Content Management
 *
 * DISCLAIMER
 *
 *  @author    leotheme <leotheme@gmail.com>
 *  @copyright 2007-2015 Leotheme
 *  @license   http://leotheme.com - prestashop template provider
 */

if (!defined('_PS_VERSION_')) {
    # module validation
    exit;
}

class Leoblogcat extends ObjectModel
{
    public $id;
    public $id_leoblogcat;
    public $image;
    public $icon_class;
    public $id_parent = 1;
    public $is_group = 0;
    public $width;
    public $submenu_width;
    public $colum_width;
    public $submenu_colum_width;
    public $item;
    public $colums = 1;
    public $type;
    public $is_content = 0;
    public $show_title = 1;
    public $type_submenu;
    public $level_depth;
    public $active = 1;
    public $position;
    public $show_sub;
    public $url;
    public $target;
    public $privacy;
    public $position_type;
    public $menu_class;
    public $content;
    public $submenu_content;
    public $level;
    public $left;
    public $right;
    public $date_add;
    public $date_upd;
    # Lang
    public $title;
    public $description;
    public $content_text;
    public $submenu_content_text;
    public $submenu_catids;
    public $is_cattree = 1;
    public $template;
    public $meta_keywords;
    public $meta_description;
    private $shop_url;
    public $link_rewrite;
    private $megaConfig = array();
    private $_editStringCol = '';
    private $_isLiveEdit = true;
    private $_module = null;
    public $id_shop = '';
    public $select_data = array();
    public $randkey;

    public function setModule($module)
    {
        $this->_module = $module;
    }
    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'leoblogcat',
        'primary' => 'id_leoblogcat',
        'multilang' => true,
        'fields' => array(
            'image' => array('type' => self::TYPE_STRING, 'validate' => 'isCatalogName'),
            'id_parent' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'required' => true),
            'level_depth' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'active' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
            'show_title' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
            'position' => array('type' => self::TYPE_INT),
            'privacy' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt', 'size' => 6),
            'template' => array('type' => self::TYPE_STRING, 'validate' => 'isCatalogName', 'size' => 200),
            'menu_class' => array('type' => self::TYPE_STRING, 'validate' => 'isCatalogName', 'size' => 25),
            'icon_class' => array('type' => self::TYPE_STRING, 'validate' => 'isCatalogName', 'size' => 125),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'date_upd' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            # Lang fields
            'title' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'required' => true, 'size' => 255),
            'content_text' => array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isString', 'required' => false),
            'meta_description' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 255, 'required' => false),
            'meta_keywords' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isGenericName', 'size' => 255, 'required' => false),
            'link_rewrite' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isLinkRewrite', 'required' => true, 'size' => 128),
            'randkey' => array('type' => self::TYPE_STRING, 'lang' => false, 'size' => 255),
        ),
    );

    public static function findByRewrite($parrams)
    {
        $id_lang = (int)Context::getContext()->language->id;
        $id_shop = (int)Context::getContext()->shop->id;
        $id = 0;
        if (isset($parrams['link_rewrite']) && $parrams['link_rewrite']) {
            $sql = 'SELECT cl.id_leoblogcat FROM '._DB_PREFIX_.'leoblogcat_lang cl';
            $sql .= ' INNER JOIN '._DB_PREFIX_.'leoblogcat_shop cs on cl.id_leoblogcat=cs.id_leoblogcat AND id_shop='.$id_shop;
            $sql .= ' INNER JOIN '._DB_PREFIX_.'leoblogcat      cc on cl.id_leoblogcat=cc.id_leoblogcat AND cl.id_leoblogcat != cc.id_parent';  # FIX : PARENT IS NOT THIS CATEGORY
            //$sql .= ' WHERE id_lang = ' . $id_lang ." AND link_rewrite = '".$parrams['link_rewrite']."'";
            $sql .= " AND link_rewrite = '".pSQL($parrams['link_rewrite'])."'";

            if ($row = Db::getInstance()->getRow($sql)) {
                $id = $row['id_leoblogcat'];
            }
        }
        return new Leoblogcat($id, $id_lang);
    }

    public function add($autodate = true, $null_values = false)
    {
        $this->position = self::getLastPosition((int)$this->id_parent);
        $this->level_depth = $this->calcLevelDepth();
        $id_shop = LeoBlogHelper::getIDShop();
        $res = parent::add($autodate, $null_values);
        $sql = 'INSERT INTO `'._DB_PREFIX_.'leoblogcat_shop` (`id_shop`, `id_leoblogcat`)
            VALUES('.(int)$id_shop.', '.(int)$this->id.')';
        $res &= Db::getInstance()->execute($sql);
        $this->cleanPositions($this->id_parent);
        return $res;
    }

    public function update($null_values = false)
    {
        $this->level_depth = $this->calcLevelDepth();
        return parent::update($null_values);
    }

    protected function recursiveDelete(&$to_delete, $id_leoblogcat)
    {
        if (!is_array($to_delete) || !$id_leoblogcat) {
            die(Tools::displayError());
        }

        $result = Db::getInstance()->executeS('
        SELECT `id_leoblogcat`
        FROM `'._DB_PREFIX_.'leoblogcat`
        WHERE `id_parent` = '.(int)$id_leoblogcat);
        foreach ($result as $row) {
            $to_delete[] = (int)$row['id_leoblogcat'];
            $this->recursiveDelete($to_delete, (int)$row['id_leoblogcat']);
        }
    }

    public function delete()
    {
        if ($this->id == 1) {
            return false;
        }
        $this->clearCache();

        // Get children categories
        $to_delete = array((int)$this->id);
        $this->recursiveDelete($to_delete, (int)$this->id);
        $to_delete = array_unique($to_delete);

        // Delete CMS Category and its child from database
        $list = count($to_delete) > 1 ? implode(',', array_map('intval', $to_delete)) : (int)$this->id;
        //delete blog
        //get all blog from category ID
        //$where   = '`id_leoblogcat` IN (' . $list . ')';
        $result_blog = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('SELECT `id_leoblog_blog` as id FROM `'._DB_PREFIX_.'leoblog_blog` WHERE `id_leoblogcat` IN ('. $list .')');
        foreach ($result_blog as $value) {
            $blog = new LeoBlogBlog($value['id']);
            $blog->delete();
        }


        Db::getInstance()->execute('DELETE FROM `'._DB_PREFIX_.'leoblogcat` WHERE `id_leoblogcat` IN ('. $list .')');
        Db::getInstance()->execute('DELETE FROM `'._DB_PREFIX_.'leoblogcat_shop` WHERE `id_leoblogcat` IN ('. $list .')');
        Db::getInstance()->execute('DELETE FROM `'._DB_PREFIX_.'leoblogcat_lang` WHERE `id_leoblogcat` IN ('. $list .')');
        leoblogcat::cleanPositions($this->id_parent);
        return true;
    }

    public static function countCats()
    {
        $row = Db::getInstance()->executeS('SELECT COUNT(id_leoblogcat) as total FROM `'._DB_PREFIX_.'leoblogcat` WHERE  id_leoblogcat!=1 AND 1=1');
        return $row[0]['total'];
    }

    public function deleteSelection($menus)
    {
        $return = 1;
        foreach ($menus as $id_leoblogcat) {
            $obj_menu = new Leoblogcat($id_leoblogcat);
            $return &= $obj_menu->delete();
        }
        return $return;
    }

    public function calcLevelDepth()
    {
        $parentleoblogcat = new Leoblogcat($this->id_parent);
        if (!$parentleoblogcat) {
            die('parent Menu does not exist');
        }
        return $parentleoblogcat->level_depth + 1;
    }

    public function updatePosition($way, $position)
    {
        $sql = 'SELECT cp.`id_leoblogcat`, cp.`position`, cp.`id_parent`
            FROM `'._DB_PREFIX_.'leoblogcat` cp
            WHERE cp.`id_parent` = '.(int)$this->id_parent.'
            ORDER BY cp.`position` ASC';
        !$res = Db::getInstance()->executeS($sql);
        if ($res) {
            return false;
        }
        
        foreach ($res as $menu) {
            if ((int)$menu['id_leoblogcat'] == (int)$this->id) {
                $moved_menu = $menu;
            }
        }

        if (!isset($moved_menu) || !isset($position)) {
            return false;
        }
        // < and > statements rather than BETWEEN operator
        // since BETWEEN is treated differently according to databases
        return (Db::getInstance()->execute('
            UPDATE `'._DB_PREFIX_.'leoblogcat`
            SET `position`= `position` '.($way ? '- 1' : '+ 1').'
            WHERE `position`
            '.($way ? '> '.(int)$moved_menu['position'].' AND `position` <= '.(int)$position : '< '.(int)$moved_menu['position'].' AND `position` >= '.(int)$position).'
            AND `id_parent`='.(int)$moved_menu['id_parent']) && Db::getInstance()->execute('
            UPDATE `'._DB_PREFIX_.'leoblogcat`
            SET `position` = '.(int)$position.'
            WHERE `id_parent` = '.(int)$moved_menu['id_parent'].'
            AND `id_leoblogcat`='.(int)$moved_menu['id_leoblogcat']));
    }

    public static function cleanPositions($id_parent)
    {
        $result = Db::getInstance()->executeS('
        SELECT `id_leoblogcat`
        FROM `'._DB_PREFIX_.'leoblogcat`
        WHERE `id_parent` = '.(int)$id_parent.'
        ORDER BY `position`');
        $sizeof = count($result);
        for ($i = 0; $i < $sizeof; ++$i) {
            $sql = '
            UPDATE `'._DB_PREFIX_.'leoblogcat`
            SET `position` = '.(int)$i.'
            WHERE `id_parent` = '.(int)$id_parent.'
            AND `id_leoblogcat` = '.(int)$result[$i]['id_leoblogcat'];
            Db::getInstance()->execute($sql);
        }
        return true;
    }

    public static function getLastPosition($id_parent)
    {
        return (Db::getInstance()->getValue('SELECT MAX(position)+1 FROM `'._DB_PREFIX_.'leoblogcat` WHERE `id_parent` = '.(int)$id_parent));
    }

    public function getInfo($id_leoblogcat, $id_lang = null, $id_shop = null)
    {
        if (!$id_lang) {
            $id_lang = Context::getContext()->language->id;
        }
        if (!$id_shop) {
            $id_shop = Context::getContext()->shop->id;
        }
        $sql = 'SELECT m.*, md.title, md.description, md.content_text
                FROM '._DB_PREFIX_.'megamenu m
                LEFT JOIN '._DB_PREFIX_.'leoblogcat_lang md ON m.id_leoblogcat = md.id_leoblogcat AND md.id_lang = '.(int)$id_lang
                .' JOIN '._DB_PREFIX_.'leoblogcat_shop bs ON m.id_leoblogcat = bs.id_leoblogcat AND bs.id_shop = '.(int)($id_shop);
        $sql .= ' WHERE m.id_leoblogcat='.(int)$id_leoblogcat;

        return Db::getInstance()->executeS($sql);
    }

    public function getChild($id_leoblogcat = null, $id_lang = null, $id_shop = null, $active = false)
    {
        if (!$id_lang) {
            $id_lang = Context::getContext()->language->id;
        }
        if (!$id_shop) {
            $id_shop = Context::getContext()->shop->id;
        }

        $sql = ' SELECT m.*, md.*
                FROM '._DB_PREFIX_.'leoblogcat m
                LEFT JOIN '._DB_PREFIX_.'leoblogcat_lang md ON m.id_leoblogcat = md.id_leoblogcat AND md.id_lang = '.(int)$id_lang
                .' JOIN '._DB_PREFIX_.'leoblogcat_shop bs ON m.id_leoblogcat = bs.id_leoblogcat AND bs.id_shop = '.(int)($id_shop);
        if ($active) {
            $sql .= ' WHERE m.`active`=1 ';
        }

        if ($id_leoblogcat != null) {
            # validate module
            $sql .= ' WHERE id_parent='.(int)$id_leoblogcat;
        }
        $sql .= ' ORDER BY `position` ';
        return Db::getInstance()->executeS($sql);
    }

    public function getAllChild($id_leoblogcat = null, $id_lang = null, $id_shop = null, $active = false)
    {
        if (!$id_lang) {
            $id_lang = Context::getContext()->language->id;
        }
        if (!$id_shop) {
            $id_shop = Context::getContext()->shop->id;
        }

        $sql = ' SELECT m.id_leoblogcat AS id_category, m.id_parent, md.title AS name
                FROM '._DB_PREFIX_.'leoblogcat m
                LEFT JOIN '._DB_PREFIX_.'leoblogcat_lang md ON m.id_leoblogcat = md.id_leoblogcat AND md.id_lang = '.(int)$id_lang
                .' JOIN '._DB_PREFIX_.'leoblogcat_shop bs ON m.id_leoblogcat = bs.id_leoblogcat AND bs.id_shop = '.(int)($id_shop);
        if ($active) {
            $sql .= ' WHERE m.`active`=1 ';
        }

        if ($id_leoblogcat != null) {
            # validate module
            $sql .= ' WHERE id_parent='.(int)$id_leoblogcat;
        }
        $sql .= ' ORDER BY `position` ';
        return Db::getInstance()->executeS($sql);
    }

    public function hasChild($id)
    {
        return isset($this->children[$id]);
    }

    public function getNodes($id)
    {
        return $this->children[$id];
    }

    public function getTree($id = null)
    {
        $childs = $this->getChild($id);

        foreach ($childs as $child) {
            # validate module
            $this->children[$child['id_parent']][] = $child;
        }
        $parent = 1;
        $output = $this->genTree($parent, 1);
        return $output;
    }

    public function getDropdown($id, $selected = 1)
    {
        $this->children = array();
        $childs = $this->getChild($id);
        foreach ($childs as $child) {
            # validate module
            $this->children[$child['id_parent']][] = $child;
        }
        $output = array(array('id' => '1', 'title' => 'Root', 'selected' => ''));
        $output = $this->genOption(1, 1, $selected, $output);

        return $output;
    }

    /**
     * @param int $level (default 0 )
     * @param type $output ( default array )
     * @param type $output
     */
    public function genOption($parent, $level, $selected, $output)
    {
        # module validation
        !is_null($level) ? $level : $level = 0;
        is_array($output) ? true : $output = array();
        
        if ($this->hasChild($parent)) {
            $data = $this->getNodes($parent);
            foreach ($data as $menu) {
                //$select = $selected == $menu['id_leoblogcat'] ? 'selected="selected"' : "";
                $output[] = array('id' => $menu['id_leoblogcat'], 'title' => str_repeat('-', $level).' '.$menu['title'].' (ID:'.$menu['id_leoblogcat'].')', 'selected' => $selected);
                if ($menu['id_leoblogcat'] != $parent) {
                    $output = $this->genOption($menu['id_leoblogcat'], $level + 1, $selected, $output);
                }
            }
        }
        return $output;
    }

    public function genTree($parent, $level)
    {
        if ($this->hasChild($parent)) {
            $data = $this->getNodes($parent);
            $t = $level == 1 ? ' sortable' : '';
            Context::getContext()->smarty->assign(array(
                'parent' => $parent,
                'level' => $level,
                't' => $t,
                'data' => $data,
                'param_id_leoblogcat' => Tools::getValue('id_leoblogcat'),
                'model_leoblogcat' => $this,
            ));
            return Context::getContext()->smarty->fetch($this->getTemplatePath().'genTree.tpl');
        }
        return '';
    }
    
    public function getTemplatePath()
    {
        return _PS_MODULE_DIR_ . 'leoblog/views/templates/admin/';
    }

    public function genTreeForApPageBuilder($parent, $level, $select = array())
    {
        if ($this->hasChild($parent)) {
            $data = $this->getNodes($parent);
            
            Context::getContext()->smarty->assign(array(
                'parent' => $parent,
                'level' => $level,
                'data' => $data,
                'select' => $select,
                'model_leoblogcat' => $this,
            ));
            return Context::getContext()->smarty->fetch($this->getTemplatePath().'genTreeForApPageBuilder.tpl');
        }
        return '';
    }

    public function getTreeForApPageBuilder($select = array(), $id = null)
    {
        $childs = $this->getChild($id);
        foreach ($childs as $child) {
            $this->children[$child['id_parent']][] = $child;
        }
        $parent = 1;
        $output = $this->genTreeForApPageBuilder($parent, 1, $select);
        return $output;
    }

    public function getFrontEndTree($id, $helper)
    {
        $child_active = 0;
        $childs = $this->getChild(null);
        foreach ($childs as $child) {
            # validate module
            $this->children[$child['id_parent']][] = $child;
            if ($child['id_parent'] != 1 && $child['active']) {
                $child_active++;
            }
        }

        $parent = $id;
        $output = $this->genFontEndTree($parent, 1, $helper, $child_active);

        return $output;
    }

    public function genFontEndTree($parent, $level, $helper, $child_active)
    {
        if ($this->hasChild($parent)) {
            $data = $this->getNodes($parent);
            $t = $level == 1 ? ' tree dhtml' : ' collapse';
            $id_sub = '';
            if ($level != 1) {
                $id_sub = 'sub_'.$parent;
                $output = '<ul id="'.$id_sub.'" class="level'.$level.$t.' ">';
            } else {
                $output = '<ul class="level'.$level.$t.' ">';
            }
            foreach ($data as $menu) {
                if (isset($menu['active']) && $menu['active']) {
                    $params = array(
                        'rewrite' => $menu['link_rewrite'],
                        'id' => $menu['id_leoblogcat']
                    );

                    $category_link = $helper->getBlogCatLink($params);

                    $cls = Tools::getValue('id_leoblogcat') == $menu['id_leoblogcat'] ? 'selected' : '';
                    $output .= '<li id="list_'.$menu['id_leoblogcat'].'" class="'.$cls.' '.$menu['menu_class'].'"><a href="'.$category_link.'" title="'.$menu['title'].'">';
                    if ($menu['icon_class']) {
                        $output .= '<i class="'.$menu['icon_class'].'"></i>';
                    }
                    $output .= '<span>'.$menu['title'].'</span></a> ';

                    if ($menu['id_leoblogcat'] != $parent) {
                        # validate module
                        if ($this->hasChild($menu['id_leoblogcat']) && $child_active) {
                            $output .= '<div class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#sub_'.$menu['id_leoblogcat'].'">
                                <i class="material-icons add">add</i>
                                <i class="material-icons remove">remove</i>
                            </div>';
                        }

                        $output .= $this->genFontEndTree($menu['id_leoblogcat'], $level + 1, $helper, $child_active);
                    }
                    $output .= '</li>';
                }
            }

            $output .= '</ul>';
            return $output;
        }
        return false;
    }
    
    public static function autoCreateKey()
    {
        $sql = 'SELECT '.self::$definition['primary'].' FROM '._DB_PREFIX_.bqSQL(self::$definition['table']).
                ' WHERE randkey IS NULL OR randkey = ""';
        
        $rows = Db::getInstance()->executes($sql);
        foreach ($rows as $row) {
            $mod_group = new Leoblogcat((int)$row[self::$definition['primary']]);
            include_once(_PS_MODULE_DIR_.'leoblog/libs/Helper.php');
            $mod_group->randkey = LeoBlogHelper::genKey();
            try {
                # Try caught to remove validate
                $mod_group->update();
            } catch (Exception $exc) {
            }
        }
    }
}
