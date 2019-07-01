$(function () {

	var page = 1
	var keyword = null
	var location = null
	var tag = null
	var clock = 0

	var paginate = () => {
		page = parseInt(page)
		const data = {
			page:page,
			keyword:keyword,
			tag:tag,
			location:location
		}
		$('.projects-ajax-response').text('')
		$('#ftco-loader').addClass('show')
		$.ajax({
			url:'/api/v1/projects',
			method:'get',
			data: data,
			success: res => {
				res.keyword = keyword
				$('.projects-ajax').html($.templates('#project').render(res)).promise().done(() => {
					$('.projects-ajax').removeClass('hide')
				})
				$('.page-item').removeClass('active')
				$('.page-link[name="'+page+'"]').parent().addClass('active')
				$('#ftco-loader').removeClass('show')
			}
		})
	}

	$(document).on('keyup','.keyword-link', (e) => {
		clearInterval(clock)
		clock = setTimeout(() => {
			e.preventDefault()
			const value = $(e.target).val()
			if(value.length===0){
				page = 1
				keyword = null
				tag = null
				location = null
				return paginate()
			}
			if(value.length < 3){
				return false
			}
			keyword = value
			$('.location-link').removeClass('active')
			page = 1
			tag = null
			location = null
			paginate()
			return false
		},500)
	})

	$(document).on('click','.page-link', (e) => {
		e.preventDefault()
		const value = $(e.target).attr('name')
		page = value
		paginate()
		return false
	})

	$(document).on('click','.tag-link', (e) => {
		e.preventDefault()
		const value = $(e.target).attr('name')
		$('.keyword-link').val('')
		$('.location-link').removeClass('active')
		if(value==='all'){
			$(this).addClass('active')
			tag = null
			page = 1
			keyword = null
			tag = null
			paginate()
		} else {
			tag = value
			page = 1
			location = null
			keyword = null
			paginate()
		}
		return false
	})

	$(document).on('click','.location-link', (e) => {
		e.preventDefault()
		$('.keyword-link').val('')
		$('.location-link').removeClass('active')
		const value = $(e.target).attr('name')
		if(value==='all'){
			page = 1
			location = null
			tag = null
			keyword = null
			paginate()
		} else {
			$(this).addClass('active')
			location = value
			page = 1
			keyword = null
			tag = null
			paginate()
		}
		return false
	})

	paginate()
})
