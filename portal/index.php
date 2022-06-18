<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>
    <!-- Bootstrap CSS -->
   
   
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

     <title>GLOBAL YOUTH CONVENTION - Impact Registration Portal</title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-12">
          <div class="form h-100">
            <style>
    img{
        max-width: 100%;
        max-height: 100%;
        display: block; /* remove extra space below image */
    }
    .box{
        width: 250px;        
        border: 5px solid black;
    }    
    .box.large{
        height: 300px;
    }
    .box.small{
        height: 100px;
    }
</style>

        <img src="impact.jpg" class= "box small" >
   
             

            
            <h3>IMPACT 2022 - Registration Portal</h3>
          <form class="mb-5" method="post" action="submit.php" id="contactForm" name="contactForm">
              <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Last Name *</label>
                  <input type="text" class="form-control input-lg" data-live-search="true" name="sname" id="sname" placeholder="Participant's Surname" required>
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">First Name *</label>
                  <input type="text" class="form-control input-lg" data-live-search="true" name="name" id="email"  placeholder="Participant's First Name" required>
                </div>

              </div>

              <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Phone Number *</label>
                  <input type="text" class="form-control input-lg" data-live-search="true" name="phone" id="phone number" placeholder="Participant's phone number">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Email *</label>
                  <input type="text" class="form-control input-lg" data-live-search="true" name="email" id="email"  placeholder="Participant's email address">
                </div>
              </div>

               <div class="row">
                <div class="col-md-12 form-group mb-3">
                  <label for="" class="col-form-label">Residential Address *</label>
                  <input type="text" class="form-control input-lg" data-live-search="true" name="address" id="address" placeholder="Residential Address">
                </div>
                
              </div>

              <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Gender *</label>
                  <select name="gender" class="form-control input-lg" data-live-search="true" id="" required>
                    <option>Please select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Category *</label>
                  <select name="category"class="form-control input-lg" data-live-search="true" id="" required>
                    <option>Please select</option>
                    <option value="teenager">Teenager</option>
                    <option value="campus">Campus Student</option>
                    <option value="corp">Corps Members</option>
                     <option value="young">Young Adult</option>
                     <option value="secondary">Secondary Student</option>
                     <option value="ex">Ex-Student</option>
                     
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Age Range *</label>
                  <select name="age" class="form-control input-lg" data-live-search="true" id="">
                    <option value="">Please select</option>
                    <option value="7-12">7-12</option>
                    <option value="13-19">13-19</option>
                    <option value="20-29">20-29</option>
                    <option value="30-39">30-39</option>
                    <option value="40-49">40-49</option>
                    <option value="50-59">50-59</option>
                    <option value="60-69">60-69</option>
                    <option value="70above">70 & above</option>
                  </select>
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Country</label>
                  <input type="text" name="section_id" value="Nigeria"  class="form-control input-lg"  id="section_id"  placeholder="Nigeria">
                </div>
              </div>

              
         <div class="row">
            <div class="col-md-6 form-group mb-3">
               <label for="" class="col-form-label">State</label>
            <select name="states_id" id="category_item" class="form-control input-lg" data-live-search="true" required>

            </select>
          </div>
         
           <div class="col-md-6 form-group mb-3">
               <label for="" class="col-form-label">Old District</label>
            <select name="oldgroup_id" id="sub_category_item" class="form-control input-lg" data-live-search="true" required>

            </select>
          </div>
            </div>
			 </div>
            <div class="hidden">
              <div class="col-md-12 form-group">
                  <label for="" class="col-form-label">Month</label>
                  <input type="text" name="month" value="January"  class="form-control input-lg"  id="explosion"  placeholder="Impact">
                </div>
              </div>
            <div class="hidden">
              <div class="col-md-12 form-group">
                  <label for="" class="col-form-label">Country</label>
                  <input type="text" name="outreaches" value="explosion"  class="form-control input-lg"  id="explosion"  placeholder="Impact">
                </div>
              </div>
			  

			  
             <div class="row">
                <div class="col-md-12 form-group">
                  <input name="submit" type="submit" value="Submit" class="btn btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
              </div>
            </form>

            <div id="form-message-warning mt-4"></div> 
            <div id="form-message-success">
              Your message was sent, thank you!
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>
          </form>


          </div>
        </div>
      </div>
    </div>
  </body>
</html>

<script>
$(document).ready(function(){

  $('#category_item').selectpicker();

  $('#sub_category_item').selectpicker();

  load_data('category_data');

  function load_data(type, category_id = '')
  {
    $.ajax({
      url:"load_data.php",
      method:"POST",
      data:{type:type, category_id:category_id},
      dataType:"json",
      success:function(data)
      {
        var html = '';
        for(var count = 0; count < data.length; count++)
        {
          html += '<option value="'+data[count].id+'">'+data[count].name+'</option>';
        }
        if(type == 'category_data')
        {
          $('#category_item').html(html);
          $('#category_item').selectpicker('refresh');
        }
        else
        {
          $('#sub_category_item').html(html);
          $('#sub_category_item').selectpicker('refresh');
        }
      }
    })
  }

  $(document).on('change', '#category_item', function(){
    var category_id = $('#category_item').val();
    load_data('sub_category_data', category_id);
  });
  
});
</script>
