<?php include "./includes/header.php"; ?>
<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Add Project
    </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 ">
        <!-- BEGIN: Input -->
        <div class="intro-y box">
            <div class="p-5" id="input">
                <div class="preview">
                    <div class="mt-3">
                        <label>Project Name</label>
                        <input type="text" class="input w-full rounded-full border mt-2">
                    </div>
                </div>
                <label>Status</label>
                <select class="input w-full rounded-full border mt-2">
                    <option>Chris Evans</option>
                    <option>Liam Neeson</option>
                    <option>Daniel Craig</option>
                </select>

            </div>
        </div>
        <!-- END: Input -->
    </div>
</div>
<?php include "./includes/footer.php"; ?>