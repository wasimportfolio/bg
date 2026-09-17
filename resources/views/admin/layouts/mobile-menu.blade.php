<!-- MOBILE OVERLAY -->
<div id="overlay"
     class="fixed inset-0 bg-black/50 z-40 hidden lg:hidden">
</div>

<script>

    const menuBtn = document.getElementById('menuBtn');
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');

    if (menuBtn && sidebar && overlay) {

        menuBtn.addEventListener('click', () => {

            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');

        });

        overlay.addEventListener('click', () => {

            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');

        });

    }

</script>