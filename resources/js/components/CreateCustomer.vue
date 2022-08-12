
<template>
<div class="container" style="margin:50px;" >

  <form @submit.prevent="addCustomer" class="form-horizontal"  action="/action_page.php">
     <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email</label>
      <div class="col-sm-5">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="image">Image</label>
      <div class="col-sm-5">
        <input type="file" class="form-control" id="image"  name="image">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="Gender">Gender</label>
      <div class="col-sm-5">
        <label class="checkbox-inline">
        <input type="checkbox" id="Check1" value="Male"> Male
        </label>
        <label class="checkbox-inline" style="margin-left:80px;">
        <input type="checkbox" id="Check2" value="Female"> Female
        </label>     
     </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="Skills">Skills</label>
      <div class="col-sm-5">
       <div class="checkbox">
        <label class="checkbox-inline">
         <input type="checkbox" id="Check1" value="Laravel"> Laravel
        </label>
        <label class="checkbox-inline" style="margin-left:80px;">
          <input type="checkbox" id="Check2" value="Codeigniter"> Codeigniter
        </label>
        </div>

       <div class="checkbox">
        <label class="checkbox-inline">
         <input type="checkbox" id="Check1" value="Ajax"> Ajax
        </label>
        <label class="checkbox-inline" style="margin-left:80px;">
          <input type="checkbox" id="Check2" value="VUE JS"> VUE JS
        </label>
        </div>

        <div class="checkbox">
        <label class="checkbox-inline" >
         <input type="checkbox" id="Check1" value="MySql"> MySql
        </label>
        
        <label class="checkbox-inline" style="margin-left:80px;">
          <input type="checkbox" id="Check2" value="API"> API
        </label>
        </div>
                 
     </div>
    </div>


    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-5" >
      <div class="text-right">
        <button type="submit" style="padding: 7px 35px;" class="btn btn-default">Submit</button>
      </div>
      </div>
    </div>
  </form>
</div>

<hr style="height:1px;border-width:0;color:black;background-color:black;margin:40px;">

</template>
<script>
    export default{
        data(){
            return{customer:{}}
               },
        methods:{
            addCustomer(){
                this.axios.post('http://localhost:8000/api/customers', this.customer).then(response =>(this.$router.push({name: 'home'})))
                .catch(err=> console.log(err))
                .finally(()=> this.loadin=false)
                         }
                }
               } 
</script>