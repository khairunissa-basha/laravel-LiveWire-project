<div>
    <section style="background-color:pink; border-radius:4px; border:1px solid red; margin:30px auto; width:500px;padding:30px; text-align:center">
        Enter your comment:<input type = "text">
        <!--<input type = "submit" value="ADD" style="background-color:green; color:white; border-radius:4px">-->
        <button style="color:white;background-color:green" wire:click="add_comment">ADD</button>
    </section>
    <section style="background-color:sky-blue; border-radius:4px; border:1px solid blue; margin:20px auto; width:500px">
    @foreach($comments as $comment)
        <div class="show-comments" style="padding:10px; text-align:center">
            <div class="comment_header">
            <p class="creator">{{$comment['creator']}}</p>
            <p class="created_at">{{$comment['created_at']}}</p>
        </div>
            <p>{{$comment['body']}}</p>
        </div>
        @endforeach
    </section>
</div>
