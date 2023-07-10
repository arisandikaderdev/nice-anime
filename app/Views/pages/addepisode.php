<section class="container">
    <?= validation_list_errors(); ?>
    <h2 class="section-title">
        Add Anime Episode
    </h2>

    <form action="<?= base_url(); ?>addepisode" method="post">
        <label for="select_anime">
            <select name="id_anime" id="select_anime">
                <option value="">Select anime</option>
                <?php foreach ($animes as $anime) : ?>
                    <option value="<?= $anime['id_anime']; ?>"><?= $anime['title']; ?></option>
                <?php endforeach; ?>
            </select>
        </label>
        <label for="episode">
            <input type="number" name="episode" id="episdoe" placeholder="input episode (number)">
        </label>

        <div class="res-wrapper">
            <div class="res">
                <h3>1080p</h3>
                <div x-data="{data : [
                                    {
                            id: new Date().getTime(),
                        }
                        ]}">
                    <template x-for="(item,index) in data" :key="index">
                        <div class="link-wrapper">
                            <input type="text" :name="'1080' + `[
                                ${index}][res]`" placeholder="insert link">
                            <input type="text" placeholder="link name" :name="'1080' + `[
                                ${index}][name]`">
                        </div>
                    </template>
                    <button class="button" @click.prevent="data.push({
                        id: new Date().getTime(),
                    })">add link</button>
                </div>
            </div>


        </div>
        <div class="res-wrapper">
            <div class="res">
                <h3>720p</h3>
                <div x-data="{data : [
                                    {
                            id: new Date().getTime(),
                        }
                        ]}">
                    <template x-for="(item,index) in data" :key="index">
                        <div class="link-wrapper">
                            <input type="text" :name="'720' + `[
                                ${index}][res]`" placeholder="insert link">
                            <input type="text" placeholder="link name" :name="'720' + `[
                                ${index}][name]`">
                        </div>
                    </template>
                    <button class="button" @click.prevent="data.push({
                        id: new Date().getTime(),
                    })">add link</button>
                </div>
            </div>


        </div>
        <div class="res-wrapper">
            <div class="res">
                <h3>480p</h3>
                <div x-data="{data : [
                                    {
                            id: new Date().getTime(),
                        }
                        ]}">
                    <template x-for="(item,index) in data" :key="index">
                        <div class="link-wrapper">
                            <input type="text" :name="'480' + `[
                                ${index}][res]`" placeholder="insert link">
                            <input type="text" placeholder="link name" :name="'480' + `[
                                ${index}][name]`">
                        </div>
                    </template>
                    <button class="button" @click.prevent="data.push({
                        id: new Date().getTime(),
                    })">add link</button>
                </div>
            </div>


        </div>
        <div class="res-wrapper">
            <div class="res">
                <h3>360p</h3>
                <div x-data="{data : [
                                    {
                            id: new Date().getTime(),
                        }
                        ]}">
                    <template x-for="(item,index) in data" :key="index">
                        <div class="link-wrapper">
                            <input type="text" :name="'360' + `[
                                ${index}][res]`" placeholder="insert link">
                            <input type="text" placeholder="link name" :name="'360' + `[
                                ${index}][name]`">
                        </div>
                    </template>
                    <button class="button" @click.prevent="data.push({
                        id: new Date().getTime(),
                    })">add link</button>
                </div>
            </div>

            <input type="submit" value="Add episode">
        </div>

    </form>
</section>