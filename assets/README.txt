ターミナルを開き、_gulpフォルダにcd後、①〜③のコマンドを順番に入力してください。
①で「package.json」②で「node_modules」「package-lock.json」が自動生成されscssが使えるようになります。

①
npm init -y
②
npm i gulp gulp-dart-sass gulp-plumber gulp-notify browser-sync
③
npx gulp

【使用例】
assets/_scss/components/_header.scssを編集すると自動でコンパイルされ
assets/_css/style.cssに吐き出されます。

「index.scss」に＠useしたものを「style.scss」に集約させています。
scssファイル追加の際は、「index.scss」に@useで記載してください。
