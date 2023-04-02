$('.department').on('change', function() {


    let department_id = $(".department option:selected").val();

    // alert(department_id)

    axios.post('/department',{

        department_id : department_id,
    })
        .then(function (response) {
            // handle success
            let length = response.data.length;

            if(response.status == 200){
                let select = "Please Select Doctor *";
                //alert(1)
                $('.doctor').empty();
                $('.doctor').append(

                    "<option>"+select+ "</option>"
                )
                for(let i = 0; i < length; i++){



                    $('.doctor').append(

                        "<option value="+response.data[i].id+">"+response.data[i].name+ "</option>"
                    )

                }



            }
        })
        .catch(function (error) {
            // handle error
            console.log(error);


        })
})


$('.doctor').on('change', function() {


    let doctor_id = $(".doctor option:selected").val();

    // alert(department_id)

    axios.post('/doctors',{

        doctor_id : doctor_id,
    })
        .then(function (response) {
            if(response.status == 200){


                $('.fee').empty();
                $('.fee').val(response.data[0].fee);
                $('.total-amount').val(response.data[0].fee);

            }
        })
        .catch(function (error) {
            // handle error
            console.log(error);


        })
})
