<?php
/*
Plugin Name: Tmp Plugin
Plugin URI: https://example.com/tmp-plugin
Description: This is a sample plugin.
Version: 1.0.0
Author: Your Name
Author URI: https://example.com
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

// プラグインのコードをここに追加します

// プラグインのコード例
function tmp_plugin_example_function() {
    // プラグインの機能を実装するコードを追加します
}

// プラグインのアクションフックやフィルターフックを設定する例
add_action('init', 'tmp_plugin_example_function');

// 管理画面のメニューに設定ページへのリンクを追加
add_action('admin_menu', 'tmp_plugin_add_admin_menu');

function tmp_plugin_add_admin_menu() {
    add_menu_page(
        'Tmp Plugin Settings',  // ページのタイトル
        'Tmp Plugin',           // メニューに表示される名前
        'manage_options',       // ページにアクセスするための権限
        'tmpplugin-settings',   // ページのスラッグ
        'tmp_plugin_render_settings_page', // ページのコールバック関数
        'dashicons-admin-generic' // アイコン
    );
}

// 設定ページのコールバック関数
function tmp_plugin_render_settings_page() {
    // 設定ページのHTMLコンテンツをここに追加します
    echo '<div class="wrap">';
    echo '<h1>Tmp Plugin Settings</h1>';
    // 設定フォームやオプションの表示
    echo '</div>';
}

// プラグインがアクティブ化されたときに設定ページを追加
register_activation_hook(__FILE__, 'tmp_plugin_add_settings_page');

function tmp_plugin_add_settings_page() {
    // 設定ページを作成するためのコードをここに追加します
}

// プラグインが非アクティブ化されたときに設定ページを削除
register_deactivation_hook(__FILE__, 'tmp_plugin_remove_settings_page');

function tmp_plugin_remove_settings_page() {
    // 設定ページを削除するためのコードをここに追加します
}
