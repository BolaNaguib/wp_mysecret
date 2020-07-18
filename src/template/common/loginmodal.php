<div id="loginmodal" class="uk-modal-container" uk-modal>
    <div class="uk-modal-dialog uk-modal-body  uk-flex uk-flex-middle uk-flex-center uk-text-center">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="loginmodal">
            <h2 class="uk-modal-title">Login</h2>
            <?php echo do_shortcode('[loginform]') ?>

        </div>

    </div>
</div>
<style>
    input#user_login,
    input#user_pass {
        border: 2px solid #eeee;
        background-color: #efe6e838;
        border-bottom: 2px solid #fe7799;
        padding: 10px;
        width: 100%;
        display: block;
        outline: none;
    }

    input#wp-submit {
        padding: 10px 20px;
        border: none;
        border-radius: 5px !important;
        cursor: pointer;
    }
</style>