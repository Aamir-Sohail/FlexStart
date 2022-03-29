<?php 

function employee_card($img,$name,$role,$doj,$email,$contact){
    echo '<div class="card component-card_4 col-4">
    <div class="card-body">
        <div class="user-profile">
            <img src="'.$img.'" class="" alt="...">
        </div>
        <div class="user-info">
            <h5 class="card-user_name">'.$name.'</h5>
            <p class="card-user_occupation">'.$role.'</p>
            <p class="card-user_occupation">'.$email.'</p>
            <p class="card-user_occupation">'.$contact.'</p>
            <div class="card-star_rating">
                <span class="badge badge-primary">'.$doj.'</span>
            </div>
           
        </div>
    </div>
</div>';
}
