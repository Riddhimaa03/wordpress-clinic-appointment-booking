<?php
function wcab_booking_form() {
    global $wpdb;
    $table = $wpdb->prefix . 'clinic_appointments';

    if (isset($_POST['wcab_submit'])) {
        $wpdb->insert($table, [
            'name' => sanitize_text_field($_POST['name']),
            'email' => sanitize_email($_POST['email']),
            'phone' => sanitize_text_field($_POST['phone']),
            'appointment_date' => $_POST['date'],
            'message' => sanitize_textarea_field($_POST['message'])
        ]);

        echo "<p style='color:green;'>Appointment booked successfully.</p>";
    }

    ob_start(); ?>
    <form method="post" class="wcab-form">
        <input type="text" name="name" placeholder="Patient Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="phone" placeholder="Phone" required>
        <input type="date" name="date" required>
        <textarea name="message" placeholder="Message"></textarea>
        <button type="submit" name="wcab_submit">Book Appointment</button>
    </form>
    <?php
    return ob_get_clean();
}
add_shortcode('clinic_appointment_form', 'wcab_booking_form');
