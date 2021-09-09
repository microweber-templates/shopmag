<?php

/*

type: layout

name: Privacy Policy

position: 12

*/

?>

<?php

if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-50';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>
<?php
$title = '';
if (page_title()) {
    $title = page_title();
}
?>

<section class="section <?php print $layout_classes; ?> edit safe-mode nodrop" field="layout-skin-12-<?php print $params['id'] ?>" rel="module">
    <div class="container-fluid">

        <h2 class="mb-3">Who we are</h2>
            <p class="mb-2">Our website address is: <a href="">https://your-website.com/</a></p>

        <h2 class="mb-3">What personal data we collect and why we collect it</h2>

        <h5 class="mb-3">Comments</h5>
            <p class="mb-2">When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor’s IP address and browser user agent string to help spam detection.</p>
            <p class="mb-2">An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p>

        <h5 class="mb-3">Media</h5>
            <p class="mb-2">If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p>

        <h5 class="mb-3">Contact forms</h5>

        <h5 class="mb-3">Cookies</h5>
            <p class="mb-2">If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p>
            <p class="mb-2">If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p>
            <p class="mb-2">When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select “Remember Me”, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p>
            <p class="mb-2">If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p>

        <h5 class="mb-3">Embedded content from other websites</h5>
            <p class="mb-2">Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p>
            <p class="mb-2">These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p>

        <h5 class="mb-3">Analytics</h5>

        <h2 class="mb-3">Who we share your data with</h2>

        <h2 class="mb-3">How long we retain your data</h2>
            <p class="mb-2">If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p>
            <p class="mb-2">For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p>

        <h2 class="mb-3">What rights you have over your data</h2>
            <p class="mb-2">If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p>

        <h2 class="mb-3">Where we send your data</h2>
            <p class="mb-2">Visitor comments may be checked through an automated spam detection service.</p>

        <h2 class="mb-3">Your contact information</h2>

        <h2 class="mb-3">Additional information</h2>

        <h5 class="mb-3">How we protect your data</h5>

        <h5 class="mb-3">What data breach procedures we have in place</h5>

        <h5 class="mb-3">What third parties we receive data from</h5>

        <h5 class="mb-3">What automated decision making and/or profiling we do with user data</h5>

        <h5 class="mb-3">Industry regulatory disclosure requirements</h5>
    </div>
</section>
