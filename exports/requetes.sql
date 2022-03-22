
-- Page home
SELECT post_ID, post_date, post_content, post_title, display_name, cat_descr 
FROM blog_posts

INNER JOIN blog_users
ON post_author = ID

INNER JOIN blog_categories
ON post_category = cat_id

ORDER BY post_date DESC

-- Page Post
SELECT post_date, post_content, post_title, display_name, cat_descr 
FROM blog_posts 

INNER JOIN blog_users 
ON post_author = ID 

INNER JOIN blog_categories 
ON post_category = cat_id 

WHERE post_ID = 7