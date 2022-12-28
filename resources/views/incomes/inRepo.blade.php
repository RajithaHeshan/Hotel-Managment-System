@extends('incomes.layout')

@section('content')
<style>
th{
    background-color: #89e0d5;
    text-align: left;
    padding: 8px;
    font-size: 16px;
    border-top: solid gray 1px;;
    border-left:  solid #ddd 1px;;
    border-right: solid #ddd 1px;;
    border-bottom: solid #ddd 1px;
    font-family: Arial, Helvetica, sans-serif;
    }
td {
    text-align: left;
    padding: 8px;
    font-size: 15px;;
    border-top: solid #ddd 1px;;
    border-left:  solid #ddd 1px;;
    border-right: solid #ddd 1px;;
    border-bottom: solid #ddd 1px;
   
    }

table{
    width: 100%;
    border-collapse: collapse;
    border: 1px solid #ddd; 
}
     
  }
</style>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<header><center>
<img src="{{ public_path('images/SSLogo.jpg') }}" class="float-left ml4" height="80px" width="150px" ></center>
<h2 ><u><center>Shreen Chellet Kalpitiya</center></u></h2>
<h2><u><center>Income Records</center></u></h2>
</header>
<table class="table table-bordered" align="center" border="1">
    <tr>
        <th >ID</th>
        <th>Time created</th>
        <th>Description</th>
        <th>Amount</th>
    </tr>
    @foreach ($incomes as $income)
    <tr>
        <td>{{ $income->id }}</td>
        <td>{{ $income->Time_info }}</td>
        <td>{{ $income->description }}</td>
        <td>{{ $income->amount }}</td>
        
    </tr>
    @endforeach

</table> <br><br>
</div>
{{ $incomes->links() }}
@endsection