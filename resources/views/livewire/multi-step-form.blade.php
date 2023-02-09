<div>
    <form wire:submit.prevent="register">
        @if ($currentStep == 1)
        <div class="step-one">
            <div class="font-semibold text-gray-700 uppercase py-4">STEP 1/4 - Personal Details</div>
            <hr>
            <div>
                <label class="block">
                    <span>First Name</span>
                    <input type="text" class="py-1 px-2 bg-gray-200 border-2 border-green-100 outline-none" wire:model="first_name">
                    <span>@error('first_name'){{ $message }}@enderror</span>
                </label>
                <label class="block">
                    <span>Last Name</span>
                    <input type="text" class="py-1 px-2 bg-gray-200 border-2 border-green-100 outline-none" wire:model="last_name">
                    <span>@error('last_name'){{ $message }}@enderror</span>
                    <span>
                </label>
            </div>
            <div>
                <label class="block">
                    <span>Gender</span>
                    <select wire:model="gender" class="py-1 px-2 bg-gray-200 border-2 border-green-100 outline-none">
                        <option value="" selected>Choose gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    <span>@error('gender'){{ $message }}@enderror</span>
                    <span>
                </label>
                <label class="block">
                    <span>Age</span>
                    <input wire:model="age" type="text" class="py-1 px-2 bg-gray-200 border-2 border-green-100 outline-none">
                    <span>@error('age'){{ $message }}@enderror</span>
                    <span>
                </label>
                <label class="block">
                    <span>Description</span>
                    <textarea name="" id="" cols="30" rows="10" class="py-1 px-2 bg-gray-200 border-2 border-green-100 outline-none" wire:model="description"></textarea>
                    <span>@error('description'){{ $message }}@enderror</span>
                </label>
            </div>
        </div>
        @endif

        @if ($currentStep == 2)
        <div class="step-two">
            <div class="font-semibold text-gray-700 uppercase py-4">STEP 2/4 - Address & Contacts</div>
            <hr>
            <div>
                <label class="block">
                    <span>Email Address</span>
                    <input wire:model="email" type="text" class="py-1 px-2 bg-gray-200 border-2 border-green-100 outline-none">
                    <span>@error('email'){{ $message }}@enderror</span>
                    <span>
                </label>
                <label class="block">
                    <span>Phone</span>
                    <input wire:model="phone" type="text" class="py-1 px-2 bg-gray-200 border-2 border-green-100 outline-none">
                    <span>@error('phone'){{ $message }}@enderror</span>
                    <span>
                </label>
            </div>
            <div>
                <label class="block">
                    <span>Country of residence</span>
                    <select wire:model="country" class="py-1 px-2 bg-gray-200 border-2 border-green-100 outline-none">
                        <option value="" selected>Select country gender</option>
                        <option value="United States">United States</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="India">India</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Phillipines">Phillipines</option>
                        <option value="Canada">Canada</option>
                        <option value="Bangladesh">Bangladesh</option>
                    </select>
                    <span>@error('country'){{ $message }}@enderror</span>
                </label>
                <label class="block">
                    <span>City</span>
                    <input type="text" wire:model="city" class="py-1 px-2 bg-gray-200 border-2 border-green-100 outline-none">
                    <span>@error('city'){{ $message }}@enderror</span>
                    <span>
                </label>
            </div>
        </div>
        @endif

        @if ($currentStep == 3)
        <div class="step-three">
            <div class="font-semibold text-gray-700 uppercase py-4">STEP 3/4 - Frameworks experience</div>
            <div>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam odit, nisi aperiam fuga laudantium soluta perferendis, aspernatur et animi, dicta ea consectetur aliquam error dignissimos blanditiis. Quidem maxime repellat mollitia!</div>
            <div>
                <label class="block">
                    <span>Laravel</span>
                    <input type="checkbox" id="laravel" value="laravel" wire:model="frameworks">
                </label>
                <label class="block">
                    <span>Codeigniter</span>
                    <input type="checkbox" id="codeigniter" value="codeigniter" wire:model="frameworks">
                </label>
                <label class="block">
                    <span>VueJS</span>
                    <input type="checkbox" id="vuejs" value="vuejs" wire:model="frameworks">
                </label>
                <label class="block">
                    <span>CakePHP</span>
                    <input type="checkbox" id="cakePHP" value="cakePHP" wire:model="frameworks">
                </label>
            </div>
            <span>@error('frameworks'){{ $message }}@enderror</span>
        </div>
        @endif

        @if ($currentStep == 4)
        <div class="step-four">
            <div class="font-semibold text-gray-700 uppercase py-4">STEP 4/4 - Attachments</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi tenetur ex eum reprehenderit dolorum voluptate doloremque reiciendis molestias recusandae aut quia dolor, quibusdam natus, quos praesentium debitis cumque totam cupiditate!</div>
            <div>
                <label>
                    <span>CV</span>
                    <input type="file" wire:model="cv">
                    <span>@error('cv'){{ $message }}@enderror</span>
                </label>
            </div>
            <div>
                <label>
                    <input type="checkbox" id="terms" wire:model="terms"> You must agree with our <a href="#">Terms and Conditions</a>
                </label>
                <span>@error('terms'){{ $message }}@enderror</span>
            </div>
        </div>
        @endif

        <div class="action-buttons flex justify-between bg-white pt-2 pb-2">
            @if ($currentStep == 1)
                <div></div>
            @endif
            @if($currentStep == 2 || $currentStep == 3 || $currentStep == 4)
                <button type="button" class="text-white bg-blue-500 px-4 py-2" wire:click="decreaseStep()">Back</button>
            @endif
            @if($currentStep == 1 || $currentStep == 2 || $currentStep == 3)
                <button type="button" class="text-white bg-sky-500 px-4 py-2" wire:click="increaseStep()">Next</button> 
            @endif
            @if($currentStep == 4)
                <button type="submit" class="text-white bg-green-500 px-4 py-2">Submit</button>
            @endif
        </div>
    </form>
</div>
