require.config

	# 絶対パスで設定すること
	baseUrl:
		'/'

	# ファイル読み込み待ち時間
	waitSeconds:
		120

	paths:
		jquery:								'/lib/jquery-2.2.4'

		'callApiItems':				'/js/callApiItems'

	shim:
		'jquery':
			exports: '$'

require( [ 'jquery' , 'callApiItems' ] , (jquery,callApiItems) ->
  window.callApiItems = callApiItems
)
