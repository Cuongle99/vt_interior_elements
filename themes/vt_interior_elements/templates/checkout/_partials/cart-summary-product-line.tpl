{**
 * Copyright  PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright  PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
{block name='cart_summary_product_line'}
  <div class="media-left">
    <a href="{$product.url}" title="{$product.name}">
{if $product.default_image}
        <picture>
          {if !empty($product.default_image.small.sources.avif)}<source srcset="{$product.default_image.small.sources.avif}" type="image/avif">{/if}
          {if !empty($product.default_image.small.sources.webp)}<source srcset="{$product.default_image.small.sources.webp}" type="image/webp">{/if}
          <img class="img-fluid media-object" src="{$product.default_image.small.url}" alt="{$product.name}" loading="lazy">
        </picture>
{else}
        <picture>
          {if !empty($urls.no_picture_image.bySize.small_default.sources.avif)}<source srcset="{$urls.no_picture_image.bySize.small_default.sources.avif}" type="image/avif">{/if}
          {if !empty($urls.no_picture_image.bySize.small_default.sources.webp)}<source srcset="{$urls.no_picture_image.bySize.small_default.sources.webp}" type="image/webp">{/if}
          <img class="img-fluid" src="{$urls.no_picture_image.bySize.small_default.url}" loading="lazy" />
        </picture>
{/if}
    </a>
  </div>
  <div class="media-body">
    <div class="product-line-info">
        <span class="product-name">
            <a href="{$product.url}" target="_blank" rel="noopener noreferrer nofollow">{$product.name}</a>
        </span>
        <span class="product-quantity">x{$product.quantity}</span>
      <span class="product-price float-xs-right">{$product.price}</span>
    </div>
    
    {hook h='displayProductPriceBlock' product=$product type="unit_price"}
    {foreach from=$product.attributes key="attribute" item="value"}
        <div class="product-line-info product-line-info-secondary text-muted">
            <span class="label">{$attribute}:</span>
            <span class="value">{$value}</span>
        </div>
    {/foreach}
    <br/>
  </div>
{/block}
