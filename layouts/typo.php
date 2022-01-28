<?php

/*

  type: layout
  content_type: static
  name: Typography
  position: 11
  description: Typography

*/

?>
<?php include template_dir() . "header.php"; ?>

<div class="edit main-content">
    <section class="section d-flex">
        <div class="container align-self-center align-items-center">
            <!-- Headings -->
            <div class="row bg-silver">
                <div class="col-lg-6 mx-auto text-center">
                    <h1>H1 Title</h1>
                </div>

                <div class="col-lg-6 mx-auto text-center">
                    <h1 class="hr">H1 Title</h1>
                </div>

                <div class="col-lg-6 mx-auto text-center">
                    <h2>H2 Title</h2>
                </div>

                <div class="col-lg-6 mx-auto text-center">
                    <h2 class="hr">H2 Title</h2>
                </div>

                <div class="col-lg-6 mx-auto text-center">
                    <h3>H3 Title</h3>
                </div>

                <div class="col-lg-6 mx-auto text-center">
                    <h3 class="hr">H3 Title</h3>
                </div>

                <div class="col-lg-6 mx-auto text-center">
                    <h4>H4 Title</h4>
                </div>

                <div class="col-lg-6 mx-auto text-center">
                    <h4 class="hr">H4 Title</h4>
                </div>

                <div class="col-lg-6 mx-auto text-center">
                    <h5>H5 Title</h5>
                </div>

                <div class="col-lg-6 mx-auto text-center">
                    <h5 class="hr">H5 Title</h5>
                </div>
            </div>

            <!-- Paragraphs -->
            <div class="row p-40">
                <div class="col-lg-4 mx-auto">
                    <?php element_display('paragraph.php'); ?>
                    <br/><br/>
                    <small><?php _lang("Small text", "templates/shopmag"); ?><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</small>
                </div>

                <div class="col-lg-4 mx-auto">
                    <?php element_display('paragraph-lead.php'); ?>
                    <br/><br/>
                    <?php element_display('paragraph-highlight.php'); ?>
                </div>
            </div>

            <!-- Lists -->
            <div class="row p-40 bg-silver">
                <div class="col-lg-4 mx-auto text-center">
                    <?php element_display('ordered-list.php'); ?>
                </div>

                <div class="col-lg-4 mx-auto text-center">
                    <?php element_display('unordered-list.php'); ?>
                </div>
            </div>

            <!-- Blockquotes -->
            <div class="row p-40">
                <div class="col-lg-4 mx-auto text-start text-left">
                    <?php element_display('blockquote.php'); ?>
                </div>

                <div class="col-lg-4 mx-auto text-center">
                    <?php element_display('blockquote.php'); ?>
                </div>
            </div>

            <!-- Buttons -->
            <div class="row p-40 bg-silver">
                <div class="col-lg-4 mx-auto text-start text-left">
                    <div class="button-1">
                        <a href="#"><?php _lang("LARGE BUTTON", "templates/shopmag"); ?></a>
                        <div class="mask"></div>
                    </div>

                    <br/>
                    <br/>

                    <div class="button-2">
                        <a href="#"><?php _lang("LARGE BUTTON WITH ARROW", "templates/shopmag"); ?></a>
                        <div class="mask"></div>
                    </div>

                    <br/>
                    <br/>

                    <div class="button-3">
                        <a href="#"><?php _lang("LARGE BUTTON WITH ARROW", "templates/shopmag"); ?></a>
                    </div>
                </div>

                <div class="col-lg-4 mx-auto text-start text-left">
                    <div class="button-1 button-md">
                        <a href="#"><?php _lang("MEDIUM BUTTON", "templates/shopmag"); ?></a>
                        <div class="mask"></div>
                    </div>

                    <br/>
                    <br/>

                    <div class="button-2 button-md">
                        <a href="#"><?php _lang("MEDIUM BUTTON WITH ARROW", "templates/shopmag"); ?>W</a>
                        <div class="mask"></div>
                    </div>

                    <br/>
                    <br/>

                    <div class="button-3 button-md">
                        <a href="#"><?php _lang("MEDIUM BUTTON WITH ARROW", "templates/shopmag"); ?></a>
                    </div>
                </div>
            </div>

            <div class="row bg-default m-t-40 p-40">
                <div class="col-lg-4 mx-auto text-start text-left">
                    <a href="#" class="button-4"><span><?php _lang("White stroke", "templates/shopmag"); ?></span></a>

                    <br/>
                    <br/>

                    <a href="#" class="button-5"><span><?php _lang("White stroke with arrow", "templates/shopmag"); ?></span></a>

                    <br/>
                    <br/>

                    <div class="button-6"><a href="#"><?php _lang("Large button with arrow", "templates/shopmag"); ?></a></div>
                </div>

                <div class="col-lg-4 mx-auto text-start text-left">

                    <a href="#" class="button-4 button-md"><span><?php _lang("White stroke", "templates/shopmag"); ?></span></a>

                    <br/>
                    <br/>

                    <a href="#" class="button-5 button-md"><span><?php _lang("White stroke with arrow", "templates/shopmag"); ?></span></a>

                    <br/>
                    <br/>

                    <div class="button-6 button-md"><a href="#"><?php _lang("Medium button with arrow", "templates/shopmag"); ?></a></div>
                </div>
            </div>

            <div class="row bg-default m-b-40 p-40">
                <div class="col-lg-2 mx-auto text-start text-left">
                    <a href="#" class="button-7"><span><?php _lang("Read more", "templates/shopmag"); ?></span></a>
                </div>

                <div class="col-lg-2 mx-auto text-start text-left">
                    <a href="#" class="button-8"><span><?php _lang("Read more", "templates/shopmag"); ?></span></a>
                </div>

                <div class="col-lg-2 mx-auto text-start text-left">
                    <a href="#" class="button-8 button-red"><span><?php _lang("Read more", "templates/shopmag"); ?></span></a>
                </div>
            </div>

            <!-- Forms -->
            <div class="row">
                <div class="col-lg-4 mx-auto">
                    <form>
                        <fieldset>
                            <div class="form-group mb-2">
                                <label for="exampleInputEmail1"><?php _lang("Email address", "templates/shopmag"); ?> <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right" title="<?php _lang("Tooltip text goes here and tells something", "templates/shopmag"); ?>."></i></label>
                                <input type="email" class="form-control mb-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?php _lang("Enter email", "templates/shopmag"); ?>">
                                <small id="emailHelp" class="form-text text-muted"><?php _lang("We'll never share your email with anyone else.", "templates/shopmag"); ?></small>
                            </div>
                            <div class="form-group mb-2">
                                <label for="exampleInputPassword1"><?php _lang("Password", "templates/shopmag"); ?></label>
                                <input type="password" class="form-control mb-2" id="exampleInputPassword1" placeholder="<?php _lang("Password", "templates/shopmag"); ?>">
                            </div>
                            <div class="form-group mb-2">
                                <select class="selectpicker form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                            <div class="form-group mb-2">
                                <label for="exampleTextarea"><?php _lang("Example textarea", "templates/shopmag"); ?></label>
                                <textarea class="form-control mb-2" id="exampleTextarea" rows="3"></textarea>
                            </div>
                            <div class="form-group mb-2">
                                <label for="exampleInputFile"><?php _lang("File input", "templates/shopmag"); ?></label>
                                <input type="file" class="form-control mb-2-file" id="exampleInputFile" aria-describedby="fileHelp">
                                <small id="fileHelp" class="form-text text-muted"><?php _lang("This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.", "templates/shopmag"); ?></small>
                            </div>

                        </fieldset>
                    </form>
                </div>

                <div class="col-lg-4 mx-auto">
                    <div class="form-group mb-2">
                        <fieldset disabled="">
                            <label class="control-label mb-2" for="disabledInput"><?php _lang("Disabled input", "templates/shopmag"); ?></label>
                            <input class="form-control mb-2" id="disabledInput" type="text" placeholder="<?php _lang("Disabled input here", "templates/shopmag"); ?>..." disabled="">
                        </fieldset>
                    </div>

                    <div class="form-group mb-2">
                        <fieldset>
                            <label class="control-label mb-2" for="readOnlyInput"><?php _lang("Readonly input", "templates/shopmag"); ?></label>
                            <input class="form-control mb-2" id="readOnlyInput" type="text" placeholder="<?php _lang("Readonly input here…", "templates/shopmag"); ?>" readonly="">
                        </fieldset>
                    </div>

                    <div class="form-group mb-2 has-success">
                        <label class="form-control mb-2-label" for="inputSuccess1"><?php _lang("Valid input", "templates/shopmag"); ?></label>
                        <input type="text" value="correct value" class="form-control mb-2 is-valid" id="inputValid">
                        <div class="valid-feedback"><?php _lang("Success! You've done it.", "templates/shopmag"); ?></div>
                    </div>

                    <div class="form-group mb-2 has-danger">
                        <label class="form-control mb-2-label" for="inputDanger1"><?php _lang("Invalid input", "templates/shopmag"); ?></label>
                        <input type="text" value="wrong value" class="form-control mb-2 is-invalid" id="inputInvalid">
                        <div class="invalid-feedback"><?php _lang("Sorry, that username's taken. Try another?", "templates/shopmag"); ?></div>
                    </div>

                    <div class="form-group mb-2">
                        <label class="col-form-label col-form-label-lg" for="inputLarge"><?php _lang("Large input", "templates/shopmag"); ?></label>
                        <input class="form-control mb-2 form-control-lg" type="text" placeholder=".form-control-lg" id="inputLarge">
                    </div>

                    <div class="form-group mb-2">
                        <label class="col-form-label" for="inputDefault"><?php _lang("Default input", "templates/shopmag"); ?></label>
                        <input type="text" class="form-control mb-2" placeholder="<?php _lang("Default input", "templates/shopmag"); ?>" id="inputDefault">
                    </div>

                    <div class="form-group mb-2">
                        <label class="col-form-label col-form-label-sm" for="inputSmall"><?php _lang("Small input", "templates/shopmag"); ?></label>
                        <input class="form-control mb-2 form-control-sm" type="text" placeholder=".form-control-sm" id="inputSmall">
                    </div>

                    <div class="form-group mb-2">
                        <label class="control-label mb-2"><?php _lang("Input addons", "templates/shopmag"); ?></label>
                        <div class="form-group mb-2">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" class="form-control mb-2" aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row m-t-20">
                <div class="col-lg-3 offset-lg-1">
                    <h5>Display Block</h5>

                    <div class="form-group mb-2">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked="">
                            <label class="custom-control-label" for="customRadio1"><?php _lang("Toggle this custom radio", "templates/shopmag"); ?></label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2"><?php _lang("Or toggle this other custom radio", "templates/shopmag"); ?></label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" disabled="">
                            <label class="custom-control-label" for="customRadio3"><?php _lang("Disabled custom radio", "templates/shopmag"); ?></label>
                        </div>
                    </div>

                    <div class="form-group mb-2">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                            <label class="custom-control-label" for="customCheck1"><?php _lang("Check this custom checkbox", "templates/shopmag"); ?></label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2" disabled="">
                            <label class="custom-control-label" for="customCheck2"><?php _lang("Disabled custom checkbox", "templates/shopmag"); ?></label>
                        </div>
                    </div>

                    <div class="form-group mb-2">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked="">
                            <label class="custom-control-label" for="customSwitch1"><?php _lang("Toggle this switch element", "templates/shopmag"); ?></label>
                        </div>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" disabled="" id="customSwitch2">
                            <label class="custom-control-label" for="customSwitch2"><?php _lang("Disabled switch element", "templates/shopmag"); ?></label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 mx-auto">
                    <h5>Display Inline</h5>

                    <div class="form-group mb-2">
                        <div class="custom-control custom-radio d-inline-block">
                            <input type="radio" id="customRadio12" name="customRadio2" class="custom-control-input" checked="">
                            <label class="custom-control-label" for="customRadio12"><?php _lang("Toggle this custom radio", "templates/shopmag"); ?></label>
                        </div>
                        <div class="custom-control custom-radio d-inline-block">
                            <input type="radio" id="customRadio22" name="customRadio2" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio22"><?php _lang("Or toggle this other custom radio", "templates/shopmag"); ?></label>
                        </div>
                        <div class="custom-control custom-radio d-inline-block">
                            <input type="radio" id="customRadio32" name="customRadio2" class="custom-control-input" disabled="">
                            <label class="custom-control-label" for="customRadio32"><?php _lang("Disabled custom radio", "templates/shopmag"); ?></label>
                        </div>
                    </div>

                    <div class="form-group mb-2">
                        <div class="custom-control custom-checkbox d-inline-block">
                            <input type="checkbox" class="custom-control-input" id="customCheck12" checked="">
                            <label class="custom-control-label" for="customCheck12"><?php _lang("Check this custom checkbox", "templates/shopmag"); ?></label>
                        </div>
                        <div class="custom-control custom-checkbox d-inline-block">
                            <input type="checkbox" class="custom-control-input" id="customCheck22" disabled="">
                            <label class="custom-control-label" for="customCheck22"><?php _lang("Disabled custom checkbox", "templates/shopmag"); ?></label>
                        </div>
                    </div>

                    <div class="form-group mb-2">
                        <div class="custom-control custom-switch d-inline-block">
                            <input type="checkbox" class="custom-control-input" id="customSwitch12" checked="">
                            <label class="custom-control-label" for="customSwitch12"><?php _lang("Toggle this switch element", "templates/shopmag"); ?></label>
                        </div>
                        <div class="custom-control custom-switch d-inline-block">
                            <input type="checkbox" class="custom-control-input" disabled="" id="customSwitch22">
                            <label class="custom-control-label" for="customSwitch22"><?php _lang("Disabled switch element", "templates/shopmag"); ?></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include template_dir() . "footer.php"; ?>
