@include('common.error')
<div class="reply-box">
    <form action="{{ route('replies.store') }}" method="post" accept-charset="UTF-8">
        {{ csrf_field() }}
        <input type="hidden" name="topic_id" value="{{ $topic->id }}">
        <div class="form-group">
            <textarea class="form-control" placeholder="分享你的想法" name="content" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-share"></i>回复</button>
    </form>
</div>
<hr>