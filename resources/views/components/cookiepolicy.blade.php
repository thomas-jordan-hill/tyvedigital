<script>
$(document).ready(function(){
  $("a.cookie-close").click(function(){
    $("div.cookie-policy").hide();
  });
});
</script>
<div class="container-fluid mt-5 mb-4 position-fixed" style="bottom: 0px; z-index: 10000000;">
    <div class="row">
        <div class="col-12">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="row">
                        <div class="col-12 p-3 cookie-policy">
                            <div class="background-colour3 p-3 rounded-lg d-flex">
                                <span class="p ps-5 me-auto my-auto align-middle">This website uses cookies. By using this website you consent to our use of these cookies.</span>
                                <span class="align-middle d-flex flex-row-reverse pe-5">
                                    <a id="cookie-close" class="cookie-close btn btn-secondary">Close</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    