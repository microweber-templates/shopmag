<?php

namespace MicroweberPackages\Template\Shopmag\tests\Browser\Components;

use Laravel\Dusk\Browser;
use Laravel\Dusk\Component as BaseComponent;
use MicroweberPackages\Page\Models\Page;

if (!class_exists('\MicroweberPackages\Template\Shopmag\tests\Browser\Components\ShopmagShopProductLinksScraper')) {

    class ShopmagShopProductLinksScraper extends BaseComponent
    {
        /**
         * Get the root selector for the component.
         *
         * @return string
         */
        public function selector()
        {
            return '.main';
        }

        /**
         * Assert that the browser page contains the component.
         *
         * @param Browser $browser
         * @return void
         */
        public function assert(Browser $browser)
        {
            // $browser->assertVisible($this->selector());
        }

        /**
         * Get the element shortcuts for the component.
         *
         * @return array
         */
        public function elements()
        {
            return [];
        }

        public $productLinks;

        public function scrapLinks(Browser $browser)
        {
            $findHome = Page::where('is_home', 1)->first();

            $browser->visit($findHome->link());

            $browser->waitForText('Shop', 30);

            $shopLink = $browser->script("return $('#header_menu').find('a:contains(\"Shop\")').first().attr('href')");
            $browser->visit($shopLink[0]);

            $browser->pause(3000);

            $browser->waitForText('Shop');
            $browser->pause(3000);

            $currencySymbol = get_currency_symbol();

            $this->productLinks = $browser->script("

                var links = [];
                $('.module-shop .col-xl-4').each(function(index) {

                    var product = {};
                    product.link = $('.module-shop .col-xl-4').eq(index).find('a').attr('href');
                    product.title = $('.module-shop .col-xl-4').eq(index).find('h6').text().trim();

                    var scrapedPrice = $('.module-shop .col-xl-4').eq(index).find('.money').text().trim();
                    scrapedPrice = scrapedPrice.replace('$currencySymbol', '');
                    scrapedPrice = scrapedPrice.replace(' ', '');
                    product.price = scrapedPrice;

                    links.push(product);
                });

                return links;
            ")[0];

        }

        public function getLinks()
        {
            return $this->productLinks;
        }
    }

}
