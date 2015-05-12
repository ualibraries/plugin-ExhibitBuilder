<form id="cover-image-form" action="<?php echo $formActionUri; ?>">
    <div class="field">
        <div>
            <?php
            echo $this->formLabel('exhibit-page-search', __('Filter By Page'));?>
        </div>
        <div>

        <?php
            echo $this->formSelect(
                'exhibit-page',
                @$_REQUEST['exhibit-page'],
                array('id' => 'exhibit-page'),
                get_table_options('ExhibitPage', null, array('exhibit_id'=>$exhibit->id))
            );
        ?>
        </div>
    </div>
</form>
