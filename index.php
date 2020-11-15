<html>    
    <head>    
        <title>DBMS Furniture Manufacturers</title>    
    </head>    
    <body>    
        <link href = "style.css" rel = "stylesheet" />    
        <h2>Enter Product Details: </h2>    
        <form method="POST" action="process.php">    
            <div class = "container">    
                <div class = "form_group">    
                    <label>Lot number:</label>    
                    <input type = "number" name = "l_no" value = "" required/>    
                </div>    
                <div class = "form_group">    
                    <label>Serial number:</label>    
                    <input type = "number" name = "s_no" value = "" required />    
                </div>    
                <div class = "form_group">    
                    <label>Product Type:</label>    
                    <input type = "text" name = "type" value = "" required/>    
                </div>    
                <div class = "form_group">    
                    <label>Description: </label>    
                    <input type = "text" name = "desc" value = "" required/>    
                </div>  
		<div class = "form_group">    
                    <label>Weight(in kgs): </label>    
                    <input type = "number" step="0.01" name = "wt" value = "" required/>    
                </div> 
		<div class = "form_group">    
                    <label>Material ID: </label>    
                    <input type = "number" name = "m_id" value = "" required/>    
                </div> 
		<div class = "form_group">    
                    <label>Number of units: </label>    
                    <input type = "number" name = "no_units" value = "" required/>    
                </div> 
		<div class = "form_group">    
                    <label>Cost per unit: </label>    
                    <input type = "number" step="0.01" name = "cost" value = "" required/>    
                </div> 
		<div class = "form_group">    
                    <label>Submit: </label>    
                    <input type="submit" value="Add data">  
                </div> 
            </div>    
        </form> 
	<a href="view.php">View Product</a>   
    </body>    
</html>