<section class="content-header">
      <h1>
      {{ $title }}
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <?php if(isset($flag) && $flag != 1){ ?>
        @foreach($breadcrumbs as $breadcrumb)
          <li class="breadcrumb-item active"><a href="{{ $breadcrumb['url']}}">{{ $breadcrumb['name'] }}</a></li>
        @endforeach
        <?php } ?>
      </ol>
    </section>