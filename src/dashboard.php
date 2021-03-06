<div class="my-3 my-md-5">
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">
                Dashboard
            </h1>
        </div>

        <div class="row row-cards">
            <?php require 'dashboard/cards_accounts.php'; ?>
        </div>

        <div class="row row-cards">
            <?php require 'dashboard/registrations.php'; ?>
            <?php require 'dashboard/registrations-pie.php'; ?>
        </div>

        <div class="row row-cards">
            <?php require 'dashboard/general-votes.php'; ?>
            <?php require 'dashboard/witness-votes.php'; ?>
        </div>

        <div class="row row-cards">
            <?php require 'dashboard/transfers.php'; ?>
            <?php require 'dashboard/comments.php'; ?>
        </div>

    </div>
</div>