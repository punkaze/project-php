<div id="header">
    <div id="menu">
        <?php session_start(); ?>
        <?php if (isset($_SESSION['usr_id'])) { ?>
            Signed in as <?php echo $_SESSION['usr_name']; ?>&nbsp&nbsp
            <button><a href="../logout.php">Logout</a></button>
        <?php }?>
    </div>
</div>