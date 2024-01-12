<?php
include('include/connect.php');
include('include/header.php');
include('include/sidebar1.php');
include('include/breadcrumbs.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Handle slot selection
    $selectedSlot = $_POST['selected_slot'];
    // Update the database or perform any other necessary actions here

    // Redirect to a confirmation page or display a success message
    header('Location: confirmation.php');
    exit;
}

$query = "SELECT s.sched_id, CONCAT(e.fname, ' ', e.lname) as 'name', e.examinee_code, s.dateofexam, s.timeofexam, s.status FROM exam_schedule s, student e WHERE e.stud_id = s.stud_id AND s.stud_id = '".$_SESSION['id']."'";
$result = mysqli_query($db, $query) or die(mysqli_error($db));

while ($row = mysqli_fetch_assoc($result)) {
    if ($row['status'] != 'Confirmed') {
        echo "<h1>No Confirmed Schedule Yet!....</h1>";
    } elseif ($row < 0) {
        echo '<img src="images/download.jpg" alt="..." width="100%">';
    } else {
?>
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div id="content-wrapper">
            <div class="container-fluid">
                <h2>Please Take Note Your Schedule</h2>
                <div class="card-body">
                    <!-- Display schedule information here -->
                </div>
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="selected_slot">Select a Slot:</label>
                        <select name="selected_slot" id="selected_slot" class="form-control">
                            <?php
                                // Query the database for available slots
                                $slotsQuery = "SELECT slot_id, slot_time FROM slots WHERE status = 'Available'";
                                $slotsResult = mysqli_query($db, $slotsQuery);
                                while ($slotRow = mysqli_fetch_assoc($slotsResult)) {
                                    echo '<option value="' . $slotRow['slot_id'] . '">' . $slotRow['slot_time'] . '</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Select Slot</button>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<?php
    }
}

include('include/scripts.php');
include('include/footer.php');
?>
