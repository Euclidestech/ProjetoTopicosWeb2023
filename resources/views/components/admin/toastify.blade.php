<script>
    document.addEventListener('livewire:initialized',()=>
    {
        Livewire.on("mostrarToast",(mensagem)=>{
            Toastify(
        {
            text:mensagem,
            duration: 3000,
            gravity: top,
            position: "right",
            stopOnFocus: true,
            style:{
                background:'#00FF7F',
                borderTop:'4px solid #14b8a6',
                color:'#134e4a'
            },

        }).showToast();
        });
    });

</script>

@if(session()->has('toast'))
    <script>
        Livewire.dispatch('mostrarToast',"{{session('toast')}}")
    </script>
    @endif
