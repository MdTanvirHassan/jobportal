<style>
	.searchbar{
		background-color: #2a5992!important;
		border-radius: 0% !important;
	}

	.search-btn{
		background-color: #adbeaf!important;
        border-radius: 0% !important;
        color: #fff!important;
		padding: 0;
	}
	/* .searchbar .form-control {
		height: 50px;
		padding: 13px 15px;
	} */
</style>
<div>
@if (Auth::guard('company')->check())
    <form action="{{ route('job.seeker.list') }}" method="get">
        <div class="searchbar">
            <div class="srchbox seekersrch">
                <div class="input-group">
                    <input type="text" name="search" id="empsearch" value="{{ Request::get('search', '') }}"
                        class="form-control p-0" placeholder="{{ __('Enter Skills or Job Seeker Details') }}"
                        autocomplete="off" />
                    <span class="input-group-btn">
                        <input type="submit" class="btn" value="{{ __('Search Job Seeker') }}">
                    </span>
                </div>
            </div>



        </div>
    </form>
@else
    <div class="searchbar mx-1">
        <form action="{{ route('job.list') }}" method="get">

            <div class="input-group">
                <input type="text" name="search" id="jbsearch" value="{{ Request::get('search', '') }}"
                    class="form-control" placeholder="{{ __('Enter Skills or job title') }}" autocomplete="off" />
                {!! Form::select(
                    'functional_area_id[]',
                    ['' => __('Select Functional Area')] + $functionalAreas,
                    Request::get('functional_area_id', null),
                    ['class' => 'form-control', 'id' => 'functional_area_id'],
                ) !!}
                <button type="submit" class="btn search-btn">Search</button>
            </div>
        </form>
    </div>
@endif
