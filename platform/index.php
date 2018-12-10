<!DOCTYPE html>
<html lang="kr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>[DIRECTIONAL]</title>
	<link href="/css/fontawesome.css" rel="stylesheet">
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/mdb.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/jquery-ui.css">
	<link href="/css/customer-customize.css" rel="stylesheet">
</head>

<body>
	<header>
		<nav class="navbar fixed-top navbar-expand-lg navbar-light">
		  <a class="navbar-brand" href="#"><img src="/img/logo1.png" alt="Directional"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
			<ul class="navbar-nav">
				<li class="nav-item">
           <a class="nav-link" href="/customer/lend/lend_p1.php">대여</a>
        </li>
        <li class="nav-item">
           <a class="nav-link" href="/customer/borrow/brrw_p1.php">차입</a>
        </li>
        <li class="nav-item">
           <a class="nav-link" href="/customer/state/p1_gainloss.php">현황</a>
        </li>
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">더보기</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				  <a class="dropdown-item" href="/customer/refund/refund_p1.php">상환요청내역</a>
				  <a class="dropdown-item" href="/customer/state/p2_trlist.php">거래내역</a>
				  <a class="dropdown-item" href="/customer/state/p3_jango.php">일자별잔고상세</a>
				</div>
			  </li>
			</ul>
			<div class="form-inline">
				<button class="btn btn-sm btn-outline-primary ml-3" type="button" onclick="$('#loginModal').modal()">로그인</button>
				<button class="btn btn-sm btn-outline-primary" type="button" onclick="move_join()">회원가입</button>
			</div>
		  </div>
		</nav>
	</header>

	<div class="row dir-main-bg">
		<div class="col d-flex flex-column justify-content-center align-items-center index-text">
			<h2>ABOUT DIRECTIONAL</h2><br>
			<p>Directional is a blockchain-based decentralized platform which allows individual or retail investors as well as institutional or professional investors to participate in securities borrowing &amp; lending (SBL) transactions on an open peer-to-peer exchange.</p>
			<p>If you have a security you wish to lend in return for a fee and generate fair market return, you can simply participate in Directional’s exchange platform and enter into a lending contract or, should you wish to borrow stocks for short-selling, you can simply participate as a borrower as long as you have sufficient margin or collateral to borrow stocks.</p>
		</div>
	</div>

	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<h4 class="text-primary text-center my-3">Directional에 로그인하세요</h4>
				<p class="text-center">대차거래를 시작하려면 로그인하세요<br>로그인 하지 않아도 플랫폼을 둘러볼 수 있습니다.</p>
				<button type="button" class="btn btn-block btn-primary w-75 mx-auto" data-dismiss="modal" onclick="move_login()">로그인</button>
				<button type="button" class="btn btn-block btn-outline-primary w-75 mx-auto my-3" data-dismiss="modal" onclick="move_guest()">플랫폼 둘러보기</button>
				<div class="text-right w-75 mx-auto mb-2">
					<a href="/customer/account/cust_s1_agreement.php"><small class="text-dark">회원가입</small></a>
				</div>
			</div>
		</div>
	</div>
	</div>

    <!-- SCRIPTS -->
<script src="/scripts/common.TXCALL.js"></script>
<script src="/scripts/jquery.js"></script>
<script src="/scripts/jquery-ui.js"></script>
<script src="/scripts/bootstrap.min.js"></script>
<script src="/scripts/mdb.min.js"></script>
<script src="/scripts/datatables.js"></script>
<script src="/scripts/customer-ui-component.js"></script>

<script>

    function move_login()
    {
        location.replace('/clogin.php');
    }

    function move_join()
    {
        location.replace('/customer/account/cust_s1_agreement.php');
    }

    function move_guest()
    {
        location.replace('/customer/lend/lend_p1.php');
    }


</script>

</body>

</html>