<?php echo validation_errors(); ?>
<?php echo form_open('login/login'); ?>

    <div class="row">
        <div class="four columns centered"><span class="field"><input type="text" class="text input" name="login" placeholder="login" value="<?php echo set_value('login'); ?>"></span></div>
    </div>
    <div class="row">
        <div class="four columns centered"><span class="field"><input type="password" class="text input" name="password" placeholder="password" value="<?php set_value(''); ?>"></span></div>
    </div>
    <div class="row">
        <div class="two columns push_four"><div class="pretty medium info btn"><input type="submit" value="Entrar" /></div></div>
        <div class="two columns"><div class="pretty medium info btn"><input type="reset" ></div></div>
    </div>
</form>
