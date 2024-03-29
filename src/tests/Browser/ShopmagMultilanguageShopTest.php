<?php

namespace MicroweberPackages\Template\Shopmag\tests\Browser;

include __DIR__ . '/Components/ShopmagShopProductLinksScraper.php';


use Illuminate\Support\Facades\Auth;
use Laravel\Dusk\Browser;
use MicroweberPackages\Page\Models\Page;
use MicroweberPackages\Template\Shopmag\tests\Browser\Components\ShopmagShopProductLinksScraper;
use MicroweberPackages\User\Models\User;
use Tests\Browser\Components\AdminContentMultilanguage;
use Tests\Browser\Components\AdminLogin;
use Tests\Browser\Components\ChekForJavascriptErrors;
use Tests\Browser\Components\LiveEditSwitchLanguage;
use Tests\DuskTestCase;
use Tests\DuskTestCaseMultilanguage;

class ShopmagMultilanguageShopTest extends DuskTestCaseMultilanguage
{
    public $template_name = 'shopmag';

    public function testShopVisit()
    {
        $this->browse(function (Browser $browser) {

            // Activate multilanguage
            $browser->within(new AdminLogin(), function ($browser) {
                $browser->fillForm();
            });

            save_option('current_template', $this->template_name,'template');

            $browser->within(new AdminContentMultilanguage(), function ($browser) {
                $browser->addLanguage('bg_BG');
                $browser->addLanguage('en_US');
            });


            $linkScraper = new ShopmagShopProductLinksScraper();
            $browser->within($linkScraper, function ($browser) use ($linkScraper) {
               $browser->scrapLinks();
            });

            foreach ($linkScraper->getLinks() as $product) {
                $browser->visit($product['link']);
                $browser->pause(1000);
                $browser->waitForText($product['title']);
                $browser->assertSee($product['title']);
                $browser->assertSee($product['price']);

                $browser->within(new ChekForJavascriptErrors(), function ($browser) {
                    $browser->validate();
                });
            }


            // Switch back to Bulgarian
            $browser->pause(2000);
            $browser->within(new LiveEditSwitchLanguage(), function ($browser) {
                $browser->switchLanguage('bg_BG');
            });

            $linkScraper = new ShopmagShopProductLinksScraper();
            $browser->within($linkScraper, function ($browser) use ($linkScraper) {
                $browser->scrapLinks();
            });

            foreach ($linkScraper->getLinks() as $product) {
                $browser->visit($product['link']);
                $browser->pause(1000);
                $browser->waitForText($product['title']);
                $browser->assertSee($product['title']);
                $browser->assertSee($product['price']);

                $browser->within(new ChekForJavascriptErrors(), function ($browser) {
                    $browser->validate();
                });
            }


        });

    }

}
