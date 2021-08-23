
<form
    class="search-form"
    role="search"
    method="get"
    id="searchform"
    action="<?php echo get_home_url() ?> "
>
    <input
        class="search-form__input"
        type="text"
        value="<?php echo get_search_query() ?>"
        name="s" id="s"
        placeholder="Поиск на сайте"
        autocomplete="off"
    />
    <ul class="ajax-search"></ul>
</form>