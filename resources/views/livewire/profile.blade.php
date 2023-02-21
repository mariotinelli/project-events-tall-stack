<div class="flex flex-1 flex-col space-y-6">

    <livewire:profile.information :user="$loggedUser" />
    <livewire:profile.new-password :user="$loggedUser" />
    <livewire:profile.become-organizer :user="$loggedUser" />

</div>
