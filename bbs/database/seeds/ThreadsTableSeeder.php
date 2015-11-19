<?php

  use Illuminate\Database\Seeder;

  class ThreadsTableSeeder extends Seeder
  {

      public function run()
      {
          DB::table('threads')->truncate();

          DB::table('threads')->insert([
              [
                  'title'      => '恵比寿のおすすめランチを紹介するスレ',
                  'description'=> '恵比寿にある値段が手軽でおすすめのランチがあれば教えて下さい！',
                  'user'       => 'Yamada',
                  'comment_count'=> 0,
                  'created_at' => '2015-11-06 20:00:00',
                  'updated_at' => '2015-11-06 20:00:00',
              ],
              [
                  'title'      => 'プログラミングしてるときについ食べちゃうお菓子',
                  'description'=> '鉄分不足してるので最近はずっと小魚食べてます',
                  'user'       => 'Yamada',
                  'comment_count'=> 0,
                  'created_at' => '2015-09-01 00:00:00',
                  'updated_at' => '2015-09-01 00:00:00',
              ],
              [
                  'title'      => 'テストです。',
                  'description'=> 'テストです。テストです。テストです。テストです。テストです。テストです。テストです。テストです。',
                  'comment_count'=> 0,
                  'user'       => 'Yamada',
                  'created_at' => '2015-02-01 00:00:01',
                  'updated_at' => '2015-02-01 00:00:01',
              ],
          ]);

      }

  }
