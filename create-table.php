<?php
function wcab_create_table() {
    global $wpdb;
    $table = $wpdb->prefix . 'clinic_appointments';

    $charset = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100),
        email VARCHAR(100),
        phone VARCHAR(15),
        appointment_date DATE,
        message TEXT
    ) $charset;";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($sql);
}
