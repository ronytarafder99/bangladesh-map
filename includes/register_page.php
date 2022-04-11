<?php function theme_options_panel()
{
    add_menu_page('Theme page title', 'Map Settings', 'manage_options', 'theme-options', 'wps_theme_func', 'dashicons-welcome-widgets-menus', 5);
    add_submenu_page('theme-options', 'Settings page title', 'Maps Links', 'manage_options', 'theme-op-settings', 'wps_theme_func_settings');
    add_submenu_page('theme-options', 'installation', 'Installation', 'manage_options', 'theme-op-faq', 'wps_theme_func_faq');
}
add_action('admin_menu', 'theme_options_panel');

function wps_theme_func()
{ ?>

    <div class="wrap">
        <h2>Map Title Options</h2>
        <?php settings_errors(); ?>
        <form method="post" action="options.php">
            <?php wp_nonce_field('update-options') ?>
            <p><strong>Map Title:</strong><br />
                <input type="text" name="map_title" size="45" value="<?php echo get_option('map_title'); ?>" />
            </p>
            <input type="hidden" name="action" value="update" />
            <input type="hidden" name="page_options" value="map_title" />
            <?php submit_button(); ?>
        </form>
        <p><strong>Set Up</strong></p>
        <ol>
            <li>After Activated the Plugin, You Will find New Options in <strong> Posts &gt; Locations</strong> Go There. </li>
            <li>Create Location In <strong>Add New Location</strong> Section. <strong>Like So</strong> ( Demo below ).</li>
        </ol>
        <form style="max-width: 800px; margin:auto;">
            <h2 class="screen-reader-text">Categories list</h2>
            <table class="wp-list-table widefat fixed striped table-view-list tags">
                <thead>
                    <tr>
                        <td id="cb" class="manage-column column-cb check-column"><label class="screen-reader-text" for="cb-select-all-1">Select All</label><input id="cb-select-all-1" type="checkbox"></td>
                        <th scope="col" id="name" class="manage-column column-name column-primary sortable desc"><a href="javascript:void(0);"><span>Name</span><span class="sorting-indicator"></span></a></th>
                        <th scope="col" id="description" class="manage-column column-description sortable desc"><a href="javascript:void(0);"><span>Description</span><span class="sorting-indicator"></span></a></th>
                        <th scope="col" id="wpseo-score" class="manage-column column-wpseo-score"><span class="yoast-tooltip yoast-tooltip-n yoast-tooltip-alt" data-label="SEO score"><span class="yoast-column-seo-score yoast-column-header-has-tooltip"><span class="screen-reader-text">SEO score</span></span></span></th>
                        <th scope="col" id="wpseo-score-readability" class="manage-column column-wpseo-score-readability"><span class="yoast-tooltip yoast-tooltip-n yoast-tooltip-alt" data-label="Readability score"><span class="yoast-column-readability yoast-column-header-has-tooltip"><span class="screen-reader-text">Readability score</span></span></span></th>
                        <th scope="col" id="slug" class="manage-column column-slug sortable desc"><a href="javascript:void(0);"><span>Slug</span><span class="sorting-indicator"></span></a></th>
                        <th scope="col" id="posts" class="manage-column column-posts num sortable desc"><a href="javascript:void(0);"><span>Count</span><span class="sorting-indicator"></span></a></th>
                    </tr>
                </thead>

                <tbody id="the-list" data-wp-lists="list:tag">
                    <tr id="tag-242" class="level-0">
                        <th scope="row" class="check-column"><label class="screen-reader-text" for="cb-select-242">Select খুলনা</label><input type="checkbox" name="delete_tags[]" value="242" id="cb-select-242"></th>
                        <td class="name column-name has-row-actions column-primary" data-colname="Name"><strong><a class="row-title" href="javascript:void(0);" aria-label="“খুলনা” (Edit)">খুলনা</a></strong><br>
                            <div class="hidden" id="inline_242">
                                <div class="name">খুলনা</div>
                                <div class="slug">khulna</div>
                                <div class="parent">0</div>
                            </div>
                            <div class="row-actions"><span class="edit"><a href="javascript:void(0);" aria-label="Edit “খুলনা”">Edit</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “খুলনা” inline" aria-expanded="false">Quick&nbsp;Edit</button> | </span><span class="delete"><a href="javascript:void(0);" class="delete-tag aria-button-if-js" aria-label="Delete “খুলনা”" role="button">Delete</a> | </span><span class="view"><a href="javascript:void(0);" aria-label="View “খুলনা” archive">View</a></span></div>
                        </td>
                        <td class="description column-description" data-colname="Description"><span aria-hidden="true">—</span><span class="screen-reader-text">No description</span></td>
                        <td class="wpseo-score column-wpseo-score" data-colname="SEO score">
                            <div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span>
                        </td>
                        <td class="wpseo-score-readability column-wpseo-score-readability" data-colname="Readability score">
                            <div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span>
                        </td>
                        <td class="slug column-slug" data-colname="Slug">khulna</td>
                        <td class="posts column-posts" data-colname="Count"><a href="edit.php?location=khulna">0</a></td>
                    </tr>
                    <tr id="tag-249" class="level-1" style="">
                        <th scope="row" class="check-column"><label class="screen-reader-text" for="cb-select-249">Select বাগেরহাট</label><input type="checkbox" name="delete_tags[]" value="249" id="cb-select-249"></th>
                        <td class="name column-name has-row-actions column-primary" data-colname="Name"><strong><a class="row-title" href="javascript:void(0);" aria-label="“বাগেরহাট” (Edit)">— বাগেরহাট</a></strong><br>
                            <div class="hidden" id="inline_249">
                                <div class="name">বাগেরহাট</div>
                                <div class="slug">bagerhat</div>
                                <div class="parent">242</div>
                            </div>
                            <div class="row-actions"><span class="edit"><a href="javascript:void(0);" aria-label="Edit “বাগেরহাট”">Edit</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “বাগেরহাট” inline" aria-expanded="false">Quick&nbsp;Edit</button> | </span><span class="delete"><a href="javascript:void(0);" class="delete-tag aria-button-if-js" aria-label="Delete “বাগেরহাট”" role="button">Delete</a> | </span><span class="view"><a href="javascript:void(0);" aria-label="View “বাগেরহাট” archive">View</a></span></div>
                        </td>
                        <td class="description column-description" data-colname="Description"><span aria-hidden="true">—</span><span class="screen-reader-text">No description</span></td>
                        <td class="wpseo-score column-wpseo-score" data-colname="SEO score">
                            <div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span>
                        </td>
                        <td class="wpseo-score-readability column-wpseo-score-readability" data-colname="Readability score">
                            <div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span>
                        </td>
                        <td class="slug column-slug" data-colname="Slug">bagerhat</td>
                        <td class="posts column-posts" data-colname="Count"><a href="edit.php?location=bagerhat">0</a></td>
                    </tr>
                    <tr id="tag-250" class="level-2" style="">
                        <th scope="row" class="check-column"><label class="screen-reader-text" for="cb-select-250">Select ফকিরহাট</label><input type="checkbox" name="delete_tags[]" value="250" id="cb-select-250"></th>
                        <td class="name column-name has-row-actions column-primary" data-colname="Name"><strong><a class="row-title" href="javascript:void(0);" aria-label="“ফকিরহাট” (Edit)">— — ফকিরহাট</a></strong><br>
                            <div class="hidden" id="inline_250">
                                <div class="name">ফকিরহাট</div>
                                <div class="slug">fakirhat</div>
                                <div class="parent">249</div>
                            </div>
                            <div class="row-actions"><span class="edit"><a href="javascript:void(0);" aria-label="Edit “ফকিরহাট”">Edit</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “ফকিরহাট” inline" aria-expanded="false">Quick&nbsp;Edit</button> | </span><span class="delete"><a href="javascript:void(0);" class="delete-tag aria-button-if-js" aria-label="Delete “ফকিরহাট”" role="button">Delete</a> | </span><span class="view"><a href="javascript:void(0);" aria-label="View “ফকিরহাট” archive">View</a></span></div>
                        </td>
                        <td class="description column-description" data-colname="Description"><span aria-hidden="true">—</span><span class="screen-reader-text">No description</span></td>
                        <td class="wpseo-score column-wpseo-score" data-colname="SEO score">
                            <div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span>
                        </td>
                        <td class="wpseo-score-readability column-wpseo-score-readability" data-colname="Readability score">
                            <div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span>
                        </td>
                        <td class="slug column-slug" data-colname="Slug">fakirhat</td>
                        <td class="posts column-posts" data-colname="Count"><a href="edit.php?location=fakirhat">0</a></td>
                    </tr>
                    <tr id="tag-240" class="level-0">
                        <th scope="row" class="check-column"><label class="screen-reader-text" for="cb-select-240">Select চট্টগ্রাম</label><input type="checkbox" name="delete_tags[]" value="240" id="cb-select-240"></th>
                        <td class="name column-name has-row-actions column-primary" data-colname="Name"><strong><a class="row-title" href="javascript:void(0);" aria-label="“চট্টগ্রাম” (Edit)">চট্টগ্রাম</a></strong><br>
                            <div class="hidden" id="inline_240">
                                <div class="name">চট্টগ্রাম</div>
                                <div class="slug">chattgrom</div>
                                <div class="parent">0</div>
                            </div>
                            <div class="row-actions"><span class="edit"><a href="javascript:void(0);" aria-label="Edit “চট্টগ্রাম”">Edit</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “চট্টগ্রাম” inline" aria-expanded="false">Quick&nbsp;Edit</button> | </span><span class="delete"><a href="javascript:void(0);" class="delete-tag aria-button-if-js" aria-label="Delete “চট্টগ্রাম”" role="button">Delete</a> | </span><span class="view"><a href="javascript:void(0);" aria-label="View “চট্টগ্রাম” archive">View</a></span></div>
                        </td>
                        <td class="description column-description" data-colname="Description"><span aria-hidden="true">—</span><span class="screen-reader-text">No description</span></td>
                        <td class="wpseo-score column-wpseo-score" data-colname="SEO score">
                            <div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span>
                        </td>
                        <td class="wpseo-score-readability column-wpseo-score-readability" data-colname="Readability score">
                            <div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span>
                        </td>
                        <td class="slug column-slug" data-colname="Slug">chattgrom</td>
                        <td class="posts column-posts" data-colname="Count"><a href="edit.php?location=chattgrom">0</a></td>
                    </tr>
                    <tr id="tag-238" class="level-0">
                        <th scope="row" class="check-column"><label class="screen-reader-text" for="cb-select-238">Select ঢাকা</label><input type="checkbox" name="delete_tags[]" value="238" id="cb-select-238"></th>
                        <td class="name column-name has-row-actions column-primary" data-colname="Name"><strong><a class="row-title" href="javascript:void(0);" aria-label="“ঢাকা” (Edit)">ঢাকা</a></strong><br>
                            <div class="hidden" id="inline_238">
                                <div class="name">ঢাকা</div>
                                <div class="slug">dhaka</div>
                                <div class="parent">0</div>
                            </div>
                            <div class="row-actions"><span class="edit"><a href="javascript:void(0);" aria-label="Edit “ঢাকা”">Edit</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “ঢাকা” inline" aria-expanded="false">Quick&nbsp;Edit</button> | </span><span class="delete"><a href="javascript:void(0);"Delete “ঢাকা”" role="button">Delete</a> | </span><span class="view"><a href="javascript:void(0);" aria-label="View “ঢাকা” archive">View</a></span></div>
                        </td>
                        <td class="description column-description" data-colname="Description"><span aria-hidden="true">—</span><span class="screen-reader-text">No description</span></td>
                        <td class="wpseo-score column-wpseo-score" data-colname="SEO score">
                            <div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span>
                        </td>
                        <td class="wpseo-score-readability column-wpseo-score-readability" data-colname="Readability score">
                            <div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span>
                        </td>
                        <td class="slug column-slug" data-colname="Slug">dhaka</td>
                        <td class="posts column-posts" data-colname="Count"><a href="edit.php?location=dhaka">1</a></td>
                    </tr>
                    <tr id="tag-247" class="level-1">
                        <th scope="row" class="check-column"><label class="screen-reader-text" for="cb-select-247">Select ফরিদপুর</label><input type="checkbox" name="delete_tags[]" value="247" id="cb-select-247"></th>
                        <td class="name column-name has-row-actions column-primary" data-colname="Name"><strong><a class="row-title" href="javascript:void(0);" aria-label="“ফরিদপুর” (Edit)">— ফরিদপুর</a></strong><br>
                            <div class="hidden" id="inline_247">
                                <div class="name">ফরিদপুর</div>
                                <div class="slug">faridpur</div>
                                <div class="parent">238</div>
                            </div>
                            <div class="row-actions"><span class="edit"><a href="javascript:void(0);" aria-label="Edit “ফরিদপুর”">Edit</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “ফরিদপুর” inline" aria-expanded="false">Quick&nbsp;Edit</button> | </span><span class="delete"><a href="javascript:void(0);" class="delete-tag aria-button-if-js" aria-label="Delete “ফরিদপুর”" role="button">Delete</a> | </span><span class="view"><a href="javascript:void(0);" aria-label="View “ফরিদপুর” archive">View</a></span></div>
                        </td>
                        <td class="description column-description" data-colname="Description"><span aria-hidden="true">—</span><span class="screen-reader-text">No description</span></td>
                        <td class="wpseo-score column-wpseo-score" data-colname="SEO score">
                            <div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span>
                        </td>
                        <td class="wpseo-score-readability column-wpseo-score-readability" data-colname="Readability score">
                            <div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span>
                        </td>
                        <td class="slug column-slug" data-colname="Slug">faridpur</td>
                        <td class="posts column-posts" data-colname="Count"><a href="edit.php?location=faridpur">1</a></td>
                    </tr>
                    <tr id="tag-248" class="level-2">
                        <th scope="row" class="check-column"><label class="screen-reader-text" for="cb-select-248">Select ফরিদপুর সদর উপজেলা</label><input type="checkbox" name="delete_tags[]" value="248" id="cb-select-248"></th>
                        <td class="name column-name has-row-actions column-primary" data-colname="Name"><strong><a class="row-title" href="javascript:void(0);" aria-label="“ফরিদপুর সদর উপজেলা” (Edit)">— — ফরিদপুর সদর উপজেলা</a></strong><br>
                            <div class="hidden" id="inline_248">
                                <div class="name">ফরিদপুর সদর উপজেলা</div>
                                <div class="slug">faridpur-sadar-upazila</div>
                                <div class="parent">247</div>
                            </div>
                            <div class="row-actions"><span class="edit"><a href="javascript:void(0);" aria-label="Edit “ফরিদপুর সদর উপজেলা”">Edit</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “ফরিদপুর সদর উপজেলা” inline" aria-expanded="false">Quick&nbsp;Edit</button> | </span><span class="delete"><a href="javascript:void(0);" class="delete-tag aria-button-if-js" aria-label="Delete “ফরিদপুর সদর উপজেলা”" role="button">Delete</a> | </span><span class="view"><a href="javascript:void(0);" aria-label="View “ফরিদপুর সদর উপজেলা” archive">View</a></span></div>
                        </td>
                        <td class="description column-description" data-colname="Description"><span aria-hidden="true">—</span><span class="screen-reader-text">No description</span></td>
                        <td class="wpseo-score column-wpseo-score" data-colname="SEO score">
                            <div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span>
                        </td>
                        <td class="wpseo-score-readability column-wpseo-score-readability" data-colname="Readability score">
                            <div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span>
                        </td>
                        <td class="slug column-slug" data-colname="Slug">faridpur-sadar-upazila</td>
                        <td class="posts column-posts" data-colname="Count"><a href="edit.php?location=faridpur-sadar-upazila">0</a></td>
                    </tr>
                    <tr id="tag-243" class="level-0">
                        <th scope="row" class="check-column"><label class="screen-reader-text" for="cb-select-243">Select বরিশাল</label><input type="checkbox" name="delete_tags[]" value="243" id="cb-select-243"></th>
                        <td class="name column-name has-row-actions column-primary" data-colname="Name"><strong><a class="row-title" href="javascript:void(0);"“বরিশাল” (Edit)">বরিশাল</a></strong><br>
                            <div class="hidden" id="inline_243">
                                <div class="name">বরিশাল</div>
                                <div class="slug">barishal</div>
                                <div class="parent">0</div>
                            </div>
                            <div class="row-actions"><span class="edit"><a href="javascript:void(0);"Edit “বরিশাল”">Edit</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “বরিশাল” inline" aria-expanded="false">Quick&nbsp;Edit</button> | </span><span class="delete"><a href="javascript:void(0);" class="delete-tag aria-button-if-js" aria-label="Delete “বরিশাল”" role="button">Delete</a> | </span><span class="view"><a href="javascript:void(0);" aria-label="View “বরিশাল” archive">View</a></span></div>
                        </td>
                        <td class="description column-description" data-colname="Description"><span aria-hidden="true">—</span><span class="screen-reader-text">No description</span></td>
                        <td class="wpseo-score column-wpseo-score" data-colname="SEO score">
                            <div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span>
                        </td>
                        <td class="wpseo-score-readability column-wpseo-score-readability" data-colname="Readability score">
                            <div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span>
                        </td>
                        <td class="slug column-slug" data-colname="Slug">barishal</td>
                        <td class="posts column-posts" data-colname="Count"><a href="edit.php?location=barishal">0</a></td>
                    </tr>
                    <tr id="tag-246" class="level-0">
                        <th scope="row" class="check-column"><label class="screen-reader-text" for="cb-select-246">Select ময়মনসিংহ</label><input type="checkbox" name="delete_tags[]" value="246" id="cb-select-246"></th>
                        <td class="name column-name has-row-actions column-primary" data-colname="Name"><strong><a class="row-title" href="javascript:void(0);" aria-label="“ময়মনসিংহ” (Edit)">ময়মনসিংহ</a></strong><br>
                            <div class="hidden" id="inline_246">
                                <div class="name">ময়মনসিংহ</div>
                                <div class="slug">mannshin</div>
                                <div class="parent">0</div>
                            </div>
                            <div class="row-actions"><span class="edit"><a href="javascript:void(0);" aria-label="Edit “ময়মনসিংহ”">Edit</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “ময়মনসিংহ” inline" aria-expanded="false">Quick&nbsp;Edit</button> | </span><span class="delete"><a href="javascript:void(0);" class="delete-tag aria-button-if-js" aria-label="Delete “ময়মনসিংহ”" role="button">Delete</a> | </span><span class="view"><a href="javascript:void(0);" aria-label="View “ময়মনসিংহ” archive">View</a></span></div>
                        </td>
                        <td class="description column-description" data-colname="Description"><span aria-hidden="true">—</span><span class="screen-reader-text">No description</span></td>
                        <td class="wpseo-score column-wpseo-score" data-colname="SEO score">
                            <div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span>
                        </td>
                        <td class="wpseo-score-readability column-wpseo-score-readability" data-colname="Readability score">
                            <div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span>
                        </td>
                        <td class="slug column-slug" data-colname="Slug">mannshin</td>
                        <td class="posts column-posts" data-colname="Count"><a href="edit.php?location=mannshin">0</a></td>
                    </tr>
                    <tr id="tag-245" class="level-0">
                        <th scope="row" class="check-column"><label class="screen-reader-text" for="cb-select-245">Select রংপুর</label><input type="checkbox" name="delete_tags[]" value="245" id="cb-select-245"></th>
                        <td class="name column-name has-row-actions column-primary" data-colname="Name"><strong><a class="row-title" href="javascript:void(0);" aria-label="“রংপুর” (Edit)">রংপুর</a></strong><br>
                            <div class="hidden" id="inline_245">
                                <div class="name">রংপুর</div>
                                <div class="slug">rangpur</div>
                                <div class="parent">0</div>
                            </div>
                            <div class="row-actions"><span class="edit"><a href="javascript:void(0);" aria-label="Edit “রংপুর”">Edit</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “রংপুর” inline" aria-expanded="false">Quick&nbsp;Edit</button> | </span><span class="delete"><a href="javascript:void(0);" class="delete-tag aria-button-if-js" aria-label="Delete “রংপুর”" role="button">Delete</a> | </span><span class="view"><a href="javascript:void(0);" aria-label="View “রংপুর” archive">View</a></span></div>
                        </td>
                        <td class="description column-description" data-colname="Description"><span aria-hidden="true">—</span><span class="screen-reader-text">No description</span></td>
                        <td class="wpseo-score column-wpseo-score" data-colname="SEO score">
                            <div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span>
                        </td>
                        <td class="wpseo-score-readability column-wpseo-score-readability" data-colname="Readability score">
                            <div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span>
                        </td>
                        <td class="slug column-slug" data-colname="Slug">rangpur</td>
                        <td class="posts column-posts" data-colname="Count"><a href="edit.php?location=rangpur">0</a></td>
                    </tr>
                    <tr id="tag-241" class="level-0">
                        <th scope="row" class="check-column"><label class="screen-reader-text" for="cb-select-241">Select রাজশাহী</label><input type="checkbox" name="delete_tags[]" value="241" id="cb-select-241"></th>
                        <td class="name column-name has-row-actions column-primary" data-colname="Name"><strong><a class="row-title" href="javascript:void(0);" aria-label="“রাজশাহী” (Edit)">রাজশাহী</a></strong><br>
                            <div class="hidden" id="inline_241">
                                <div class="name">রাজশাহী</div>
                                <div class="slug">rajshai</div>
                                <div class="parent">0</div>
                            </div>
                            <div class="row-actions"><span class="edit"><a href="javascript:void(0);" aria-label="Edit “রাজশাহী”">Edit</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “রাজশাহী” inline" aria-expanded="false">Quick&nbsp;Edit</button> | </span><span class="delete"><a href="javascript:void(0);" class="delete-tag aria-button-if-js" aria-label="Delete “রাজশাহী”" role="button">Delete</a> | </span><span class="view"><a href="javascript:void(0);" aria-label="View “রাজশাহী” archive">View</a></span></div>
                        </td>
                        <td class="description column-description" data-colname="Description"><span aria-hidden="true">—</span><span class="screen-reader-text">No description</span></td>
                        <td class="wpseo-score column-wpseo-score" data-colname="SEO score">
                            <div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span>
                        </td>
                        <td class="wpseo-score-readability column-wpseo-score-readability" data-colname="Readability score">
                            <div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span>
                        </td>
                        <td class="slug column-slug" data-colname="Slug">rajshai</td>
                        <td class="posts column-posts" data-colname="Count"><a href="edit.php?location=rajshai">0</a></td>
                    </tr>
                    <tr id="tag-244" class="level-0">
                        <th scope="row" class="check-column"><label class="screen-reader-text" for="cb-select-244">Select সিলেট</label><input type="checkbox" name="delete_tags[]" value="244" id="cb-select-244"></th>
                        <td class="name column-name has-row-actions column-primary" data-colname="Name"><strong><a class="row-title" href="javascript:void(0);" aria-label="“সিলেট” (Edit)">সিলেট</a></strong><br>
                            <div class="hidden" id="inline_244">
                                <div class="name">সিলেট</div>
                                <div class="slug">shyllst</div>
                                <div class="parent">0</div>
                            </div>
                            <div class="row-actions"><span class="edit"><a href="javascript:void(0);" aria-label="Edit “সিলেট”">Edit</a> | </span><span class="inline hide-if-no-js"><button type="button" class="button-link editinline" aria-label="Quick edit “সিলেট” inline" aria-expanded="false">Quick&nbsp;Edit</button> | </span><span class="delete"><a href="javascript:void(0);" class="delete-tag aria-button-if-js" aria-label="Delete “সিলেট”" role="button">Delete</a> | </span><span class="view"><a href="javascript:void(0);" aria-label="View “সিলেট” archive">View</a></span></div>
                        </td>
                        <td class="description column-description" data-colname="Description"><span aria-hidden="true">—</span><span class="screen-reader-text">No description</span></td>
                        <td class="wpseo-score column-wpseo-score" data-colname="SEO score">
                            <div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span>
                        </td>
                        <td class="wpseo-score-readability column-wpseo-score-readability" data-colname="Readability score">
                            <div aria-hidden="true" title="Not available" class="wpseo-score-icon na"></div><span class="screen-reader-text wpseo-score-text">Not available</span>
                        </td>
                        <td class="slug column-slug" data-colname="Slug">shyllst</td>
                        <td class="posts column-posts" data-colname="Count"><a href="edit.php?location=shyllst">0</a></td>
                    </tr>
                </tbody>

                <tfoot>
                    <tr>
                        <td class="manage-column column-cb check-column"><label class="screen-reader-text" for="cb-select-all-2">Select All</label><input id="cb-select-all-2" type="checkbox"></td>
                        <th scope="col" class="manage-column column-name column-primary sortable desc"><a href="javascript:void(0);"><span>Name</span><span class="sorting-indicator"></span></a></th>
                        <th scope="col" class="manage-column column-description sortable desc"><a href="javascript:void(0);"><span>Description</span><span class="sorting-indicator"></span></a></th>
                        <th scope="col" class="manage-column column-wpseo-score"><span class="yoast-tooltip yoast-tooltip-n yoast-tooltip-alt" data-label="SEO score"><span class="yoast-column-seo-score yoast-column-header-has-tooltip"><span class="screen-reader-text">SEO score</span></span></span></th>
                        <th scope="col" class="manage-column column-wpseo-score-readability"><span class="yoast-tooltip yoast-tooltip-n yoast-tooltip-alt" data-label="Readability score"><span class="yoast-column-readability yoast-column-header-has-tooltip"><span class="screen-reader-text">Readability score</span></span></span></th>
                        <th scope="col" class="manage-column column-slug sortable desc"><a href="javascript:void(0);"><span>Slug</span><span class="sorting-indicator"></span></a></th>
                        <th scope="col" class="manage-column column-posts num sortable desc"><a href="javascript:void(0);"><span>Count</span><span class="sorting-indicator"></span></a></th>
                    </tr>
                </tfoot>
            </table>
        </form>
        <ol>
            <li>In the  Post edit Area OR Writting Post Section You find new option called <strong>Locations</strong> Select the Locaton You Created Earlier. </li>
            <li>Hope All Are working well <strong> Enjoy </strong>.</li>
        </ol>
    </div>

<?php }
function wps_theme_func_settings()
{ ?>

    <div class="wrap">
        <h2>Map Links Options</h2>
        <?php settings_errors(); ?>
        <form method="post" action="options.php">
            <?php wp_nonce_field('update-options') ?>
            <p><strong>Rangpur Link:</strong><br />
                <input type="text" name="rangpur" size="45" value="<?php echo get_option('rangpur'); ?>" />
            </p>
            <input type="hidden" name="action" value="update" />
            <input type="hidden" name="page_options" value="rangpur" />
            <?php submit_button(); ?>
        </form>
        <form method="post" action="options.php">
            <?php wp_nonce_field('update-options') ?>
            <p><strong>Rajshahi Link:</strong><br />
                <input type="text" name="rajshahi" size="45" value="<?php echo get_option('rajshahi'); ?>" />
            </p>
            <input type="hidden" name="action" value="update" />
            <input type="hidden" name="page_options" value="rajshahi" />
            <?php submit_button(); ?>
        </form>
        <form method="post" action="options.php">
            <?php wp_nonce_field('update-options') ?>
            <p><strong>Dhaka Link:</strong><br />
                <input type="text" name="dhaka" size="45" value="<?php echo get_option('dhaka'); ?>" />
            </p>
            <input type="hidden" name="action" value="update" />
            <input type="hidden" name="page_options" value="dhaka" />
            <?php submit_button(); ?>
        </form>
        <form method="post" action="options.php">
            <?php wp_nonce_field('update-options') ?>
            <p><strong>Khulna Link:</strong><br />
                <input type="text" name="khulna" size="45" value="<?php echo get_option('khulna'); ?>" />
            </p>
            <input type="hidden" name="action" value="update" />
            <input type="hidden" name="page_options" value="khulna" />
            <?php submit_button(); ?>
        </form>
        <form method="post" action="options.php">
            <?php wp_nonce_field('update-options') ?>
            <p><strong>Borishal Link:</strong><br />
                <input type="text" name="borishal" size="45" value="<?php echo get_option('borishal'); ?>" />
            </p>
            <input type="hidden" name="action" value="update" />
            <input type="hidden" name="page_options" value="borishal" />
            <?php submit_button(); ?>
        </form>
        <form method="post" action="options.php">
            <?php wp_nonce_field('update-options') ?>
            <p><strong>Chittagong Link:</strong><br />
                <input type="text" name="chittagong" size="45" value="<?php echo get_option('chittagong'); ?>" />
            </p>
            <input type="hidden" name="action" value="update" />
            <input type="hidden" name="page_options" value="chittagong" />
            <?php submit_button(); ?>
        </form>
        <form method="post" action="options.php">
            <?php wp_nonce_field('update-options') ?>
            <p><strong>Sylhet Link:</strong><br />
                <input type="text" name="sylhet" size="45" value="<?php echo get_option('sylhet'); ?>" />
            </p>
            <input type="hidden" name="action" value="update" />
            <input type="hidden" name="page_options" value="sylhet" />
            <?php submit_button(); ?>
        </form>
        <form method="post" action="options.php">
            <?php wp_nonce_field('update-options') ?>
            <p><strong>Mymensingh Link:</strong><br />
                <input type="text" name="mymensingh" size="45" value="<?php echo get_option('mymensingh'); ?>" />
            </p>
            <input type="hidden" name="action" value="update" />
            <input type="hidden" name="page_options" value="mymensingh" />
            <?php submit_button(); ?>
        </form>
    </div>

<?php }
function wps_theme_func_faq()
{ ?>
    <div class="wrap">
        <h2>Installation</h2>
        <p><strong>Customization</strong></p>
        <ol>
            <li>In WordPress dashboard, go to <strong>Appearance &gt; Widgets</strong>. </li>
            <li>Drag and Drop <strong>Text</strong> into your sidebar.</li>
            <li>Click <strong>Text</strong> that is right side of Visual.</li>
            <li>Enter This <code>[bangladesh_map]</code> SortCode in the Text Field</li>
            <li>Click <strong>Save</strong> And Next <strong>Done</strong>.</li>
        </ol>
        <p><strong>OR</strong></p>
        <p>Use <code>[bangladesh_map]</code> shortcode inside your post or page.</p>
        <p><strong>OR: Use this PHP code AnyWhere In your Template or Page.</strong></p>
        <code> <span style="color: #557799">&lt;?php</span> <span style="color: #008800; font-weight: bold">echo</span> do_shortcode(&#39;[bangladesh_map]&#39;); <span style="color: #557799">?&gt;</span></code>
        <hr>
        <p><strong style="color: red;">IF you face "The page can’t be found" OR 404 Error Try These.</strong></p>
        <div class="s-prose js-post-body" itemprop="text">
            <ol>
                <li>Navigate to Settings -&gt; permalinks</li>
                <li>Change the permalink structure to <em>Default</em></li>
                <li>Save settings</li>
                <li>Change to custom structure or post name (or any other structure)</li>
                <li>Save Settings</li>
            </ol>
            <p>This will re-write the htaccess file and then the re-write should work.</p>
            <hr>
            <p>If the above solution doesn't work - it should be related to server configuration.</p>
            <p>Aapache2</p>
            <p>Run: <code>a2enmod rewrite &amp;&amp; service apache2 reload</code></p>
            <p>Nginx</p>
            <p>Follow: <a href="https://do.co/2LjCF8r" rel="noreferrer">https://do.co/2LjCF8r</a></p>
            <hr>
            <p>I hope this will save your time.</p>
        </div>
    </div>
<?php }
