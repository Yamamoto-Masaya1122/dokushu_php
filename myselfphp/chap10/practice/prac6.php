<?php
// 10.6 1問 catchブロックを複数列記する場合に注意すべき点を説明してください。
// 複数のcatchブロックがある場合、記述が先にあるものが優先されてしまう。後に記述したcatchは実行されない点に注意する。

// 10.6 2問 例外を発生させる場合の注意点を「Exception」「標準例外」「再スロー」という言葉を用いて説明してください。
// Exceptionを投げない。例外の対象が曖昧になるから。
// 可能であるならば標準例外を利用する。
// 例外を握り潰さない。 例外をその場で処理ができない場合でも、最低限例外情報をログなどで出力し、そのまま例外を再スローするのが望ましいでしょう。