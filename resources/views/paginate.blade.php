<div style="display: flex; justify-content: center; align-items: center; flex-direction: row; gap: 4rem;">
    <a href="{{$data->previousPageUrl()}}">
        <input style="cursor: pointer; " type="button" value="<<Prev">
    </a>
    <a href="{{$data->nextPageUrl()}}">
        <input style="cursor: pointer; " type="button" value="Next>>">
    </a>
</div>
