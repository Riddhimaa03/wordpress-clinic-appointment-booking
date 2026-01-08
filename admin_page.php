<?php
add_action('admin_menu', 'wcab_admin_menu');

function wcab_admin_menu() {
    add_menu_page(
        'Clinic Appointments',
        'Appointments',
        'manage_options',
        'clinic-appointments',
        'wcab_admin_page'
    );
}

function wcab_admin_page() {
    global $wpdb;
    $table = $wpdb->prefix . 'clinic_appointments';
    $appointments = $wpdb->get_results("SELECT * FROM $table");
    ?>
    <div class="wrap">
        <h1>Clinic Appointments</h1>
        <table border="1" cellpadding="10">
            <tr>
                <th>Name</th><th>Email</th><th>Phone</th><th>Date</th><th>Message</th>
            </tr>
            <?php foreach ($appointments as $a) { ?>
            <tr>
                <td><?php echo esc_html($a->name); ?></td>
                <td><?php echo esc_html($a->email); ?></td>
                <td><?php echo esc_html($a->phone); ?></td>
                <td><?php echo esc_html($a->appointment_date); ?></td>
                <td><?php echo esc_html($a->message); ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
<?php } ?>
