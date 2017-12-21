<fieldset>
    <h2>My Module configuration</h2>
    <div class="panel">
        <div class="panel-heading">
            <legend><img src="../img/admin/cog.gif" alt="" width="16"
                        />Configuration</legend>
        </div>
        {if isset($confirmation)}
            <div class="alert alert-success">Settings updated</div>
        {/if}
        <form action="" method="post">
            <div class="form-group clearfix">
                <label class="col-lg-3">What's Your name:</label>
                <div class="col-lg-9">
                    <input type="text" class="form-control" name="name" value="{$helloworld_name}" />
                </div>
            </div>
            <div class="panel-footer">
                <input class="btn btn-default pull-right" type="submit"
                       name="mymod_pc_form" value="Save" />
            </div>
        </form>
    </div>
</fieldset>