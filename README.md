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
        <code> <span style="color: #557799">&lt;?php</span> <span style="color: #008800; font-weight: bold">echo</span> do_shortcode('[bangladesh_map]'); <span style="color: #557799">?&gt;</span></code>
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