<style>
:root {primary-col:#6C7BEE;}

.bg {
  
  background-color: primary-col;
  width: 480px;
  overflow: hidden;
  margin: 0 auto;
  box-sizing: border-box;
  padding: 40px;
  font-family: 'Roboto';
  margin-top: 40px;
  
}

.card {
  
  background-color: white;
  width: 100%;
  float: left;
  margin-top: 40px;
  border-radius: 5px;
  box-sizing: border-box;
  padding: 80px 30px 25px 30px;
  text-align: center;
  position: relative;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24)
  
  &__success {
    
    position: absolute;
    top: -50px;
    left: 145px;
    width: 100px;
    height: 100px;
    border-radius: 100%;
    background-color: #60c878;
    border: 5px solid white;
    
    i {
      
      color: white;
      line-height: 100px;
      font-size: 45px;
      
    }
    
  }
  
  &__msg {
    
    text-transform: uppercase;
    color: #55585b;
    font-size: 18px;
    font-weight: 500;
    margin-bottom: 5px;
    
  }
  
  &__submsg {
    
    color: #959a9e;
    font-size: 16px;
    font-weight: 400;
    margin-top: 0px;
    
  }
  
  &__body {
    
    background-color: #f8f6f6;
    border-radius: 4px;
    width: 100%;
    margin-top: 30px;
    float: left;
    box-sizing: border-box;
    padding: 30px;
    
  }
  
  &__avatar {
    
    width: 50px;
    height: 50px;
    border-radius: 100%;
    display: inline-block;
    margin-right: 10px;
    position: relative;
    top: 7px;
    
  }
  
  &__recipient-info {
    
    display: inline-block;
    
  }
  
  &__recipient {
    
    color: #232528;
    text-align: left;
    margin-bottom: 5px;
    font-weight: 600;
    
  }
  
  &__email {
    
    color: #838890;
    text-align: left;
    margin-top: 0px;
    
  }
  
  &__price {
    
    color: #232528;
    font-size: 70px;
    margin-top: 25px;
    margin-bottom: 30px;
    
    span {
      
      font-size: 60%;
      
    }
    
  }
  
  &__method {
    
    color: #d3cece;
    text-transform: uppercase;
    text-align: left;
    font-size: 11px;
    margin-bottom: 5px;
    
  }
  
  &__payment {
    
    background-color: white;
    border-radius: 4px;
    width: 100%;
    height: 100px;
    box-sizing: border-box;
    display: flex;
    align-items: center;
    justify-content: center;
    
  }
  
  &__credit-card {
    
    width: 50px;
    display: inline-block;
    margin-right: 15px;
    
  }
  
  &__card-details {
    
    display: inline-block;
    text-align: left;
    
  }
  
  &__card-type {
    
    text-transform: uppercase;
    color: #232528;
    font-weight: 600;
    font-size: 12px;
    margin-bottom: 3px;
    
  }
  
  &__card-number {
    
    color: #838890;
    font-size: 12px;    
    margin-top: 0px;
    
  }
  
  &__tags {
    
    clear: both;
    padding-top: 15px;
    
  }
  
  &__tag {
    
    text-transform: uppercase;
    background-color: #f8f6f6;
    box-sizing: border-box;
    padding: 3px 5px;
    border-radius: 3px;
    font-size: 10px;
    color: #d3cece;
    
    
  }
  
  
  
}
  
</style>
<body onLoad="Redirect()">
<div class="bg">
  
  <div class="card">
    
    <span class="card__success"><i class="ion-checkmark"></i></span>
    
    <h1 class="card__msg">Payment Complete</h1>
    <h2 class="card__submsg">Thank you for your transfer</h2>
    
    <div class="card__body">
      
      
      <div class="card__recipient-info">
       
      </div>
      
    
      
      <p class="card__method">Payment method</p>
      <div class="card__payment">
        <img src="https://seeklogo.com/images/V/VISA-logo-F3440F512B-seeklogo.com.png" class="card__credit-card">
        <div class="card__card-details">
          <p class="card__card-type">Credit / debit card</p>
            
        </div>
      </div>
      
    </div>
    
    <div class="card__tags">
        <span class="card__tag">completed</span>
       
    </div>
    
  </div>
  
</div>
</body>
<script>
function Redirect()
{
	window.setTimeout(function() {
    window.location = 'Bill.php';
  }, 5000);
}
</script>