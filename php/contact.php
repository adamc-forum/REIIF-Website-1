<?php

/* Template Name: Contact */

// Get fields
global $page;
$page = get_fields();

// Meta
global $meta;
$meta = ['title' => $page['meta'][0]['content']['title'],
    'description' => $page['meta'][0]['content']['description'],
    'image' => $page['meta'][0]['image'],
    'url' => '/contact'];

/* Header */
get_header();

?>

<div class="bg-container" smoothscroll role="main">
    <section id="contact">
        <div class="container">
            <strong class="heading margin fade-up" scroll="reveal">Connect with us</strong>
            <h1 class="h1 text-reveal" scroll="reveal">
                <?= $page['headline'] ?>
            </h1>
        </div>

        <section id="contact-form">
            <div class="container fade-up fade-up-para-lg" scroll="reveal">
                <p class="para lg">
                    <?= $page['form_headline'] ?>
                </p>

                <h2 class="small-header">Fill out the form below</h2>

                <div class="form-container">
                    <form method="post" handler="<?= admin_url('admin-ajax.php') ?>" controller="form" role="form"
                        id="contact-us-form">
                        <fieldset>
                            <input type="text" class="form-input" name="name" placeholder="Your Name"
                                aria-label="Your Name">
                        </fieldset>
                        <fieldset>
                            <input type="email" class="form-input" name="email" placeholder="Email" aria-label="Email">
                        </fieldset>
                        <fieldset>
                            <input type="text" class="form-input" name="phone" placeholder="Phone" aria-label="Phone">
                        </fieldset>

                        <fieldset class="block">
                            <textarea class="form-input" name="message" placeholder="Message"
                                aria-label="Message"></textarea>
                        </fieldset>

                        <button type="submit" class="button clickable" aria-label="Submit Form">
                            <strong>Email
                                Us Now</strong>
                        </button>

                        <input type="hidden" name="action" value="contact">
                    </form>
                    <p class="para sm">
                        <?= $page['form_thank_you_message'] ?>
                    </p>
                </div>
            </div>
        </section>


        <div id="contact-container">
            <div class="container" id="contact-details">
                <div class="fade-up fade-up-para-lg" scroll="reveal">
                    <h2 class="para lg">Social</h2>
                    <p class="para sm">
                        <a href="<?= $page['contact']['linkedin'] ?>" target="_blank" class="ext-link">
                            LinkedIn
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-295 387 20 19" xml:space="preserve">
                                <path d="M-287.8 390.7v1l6.6.3-9.4 9.7.6.7 9.4-9.7-.3 7.4h.9l.3-9.1-8.1-.3z" />
                            </svg>
                        </a>
                    </p>
                </div>
                <div class="fade-up fade-up-para-lg" scroll="reveal">
                    <h2 class="para lg">Email</h2>
                    <p class="para sm"><a href="mailto:<?= $page['contact']['email'] ?>">
                            <?= $page['contact']['email'] ?>
                        </a></p>
                </div>
            </div>

            <div class="container fade-up fade-up-para-lg" id="contact-address" scroll="reveal">
                <h2 class="para lg">Our Address</h2>
                <p class="para sm pre">
                    <?= $page['contact']['address'] ?>
                </p>
            </div>
        </div>
    </section>
</div>

<?php

get_footer();
