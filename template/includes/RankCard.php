<div class="twPc-div ">
    <span class="twPc-bg twPc-block twPc-title ">
        <?php echo $RankCardTitle ?></span>
    <div>
        <a title="Mert S. Kaplan" href="#" class="twPc-avatarLink">
            <img alt="Mert S. Kaplan" src="assets/icons/profile.jpg" class="twPc-avatarImg">
        </a>
        <div class="twPc-divUser">
            <div class="twPc-divName">
                <a href="#"><?php echo $RankCardPlayer; ?></a>
            </div>
            <span>
                <a href="#"><span><?php echo $RankCardPlayerTeam; ?></span></a>
            </span>
        </div>
    </div>
    <div class="twPc-divStats">
        <ul class="twPc-Arrange">

            <li class="twPc-ArrangeSizeFit bg-primary text-white">
                <span class="twPc-StatLabel twPc-block "><?php echo $param1Title; ?></span>
                <span class="twPc-StatValue"><?php echo $param1Value; ?></span>
            </li>

            <li class="twPc-ArrangeSizeFit bg-warning text-dark">
                <span class="twPc-StatLabel twPc-block"><?php echo $param2Title; ?></span>
                <span class="twPc-StatValue"><?php echo $param2Value; ?></span>
            </li>

            <li class="twPc-ArrangeSizeFit bg-info text-white">
                <span class="twPc-StatLabel twPc-block"><?php echo $param3Title; ?></span>
                <span class="twPc-StatValue"><?php echo $Param3Value; ?></span>
            </li>
        </ul>
    </div>
</div>
