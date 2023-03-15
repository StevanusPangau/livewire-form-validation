<form wire:submit.prevent="register">
    <div>
        <label for="name">Name</label>
        <input wire:model="name" type="text" name="name" id="name">
    </div>

    <div>
        <label for="email">Email</label>
        <input wire:model="email" type="text" name="email" id="email">
    </div>


    <div>
        <label for="password">Password</label>
        <input wire:model="password" type="password" name="password" id="password">
    </div>


    <div>
        <label for="passwordConfirmation">Password Confirmation</label>
        <input wire:model="passwordConfirmation" type="password" name="passwordConfirmation" id="passwordConfirmation">
    </div>


    <div>
        <input type="submit" value="Register">
    </div>
</form>
