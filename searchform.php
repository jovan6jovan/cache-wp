<div class="search-container">
    <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Pretraga...', 'cache-theme' ); ?>" />
        <button type="submit" class="submit" name="submit" id="searchsubmit"><i class="fa fa-2x fa-search"></i></button>
    </form>
</div>