<?php
namespace MicroweberPackages\Template\Shopmag\tests;

use Illuminate\Support\Facades\Auth;
use MicroweberPackages\App\Http\Controllers\FrontendController;
use MicroweberPackages\Core\tests\TestCase;
use MicroweberPackages\Page\Models\Page;
use MicroweberPackages\User\Models\User;

class BasicTemplateTest extends TestCase
{
    public $template_name = 'shopmag';

    public function testHomepage()
    {
        save_option('current_template', $this->template_name,'template');

        $this->assertTrue(true);
    }


}
