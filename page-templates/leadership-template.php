<?php
/*
Template Name: Leadership Template
*/
get_header(); ?>

<?php

      if(get_field('hero_image')) {
        echo '<img src="'. get_field("hero_image") .'" class="event-hero" />';
      }

      if(get_field('cover_image')) {
        echo '
        <div class="text-center">
          <div class="image-frame full-width">
            <img src="'. get_field("cover_image") .'" />
          </div>
        </div>';
      }

?>
<div id="leadership-page" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
      <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
      <div class="entry-content text-center">
          <?php the_content(); ?>
          <?php
          /** Youth Committee Heading **/
            if(get_field('youth_committee_heading')) {
              echo '<h2>'. get_field("youth_committee_heading") .'</h2>';
            }
          ?>
          <div class="row small-up-1 medium-up-3" data-equalizer data-equalize-on="medium">
          <?php
          /** Leaders **/
          if(get_field('leader1_image') || get_field('leader1_name') || get_field('leader1_title')) {
            echo '<div class="column">
                    <div class="card" data-equalizer-watch>';
                      if(get_field('leader1_image')) {
                        echo '<img src="'. get_field("leader1_image") .'" />';
                      }
                      echo'<div class="card-content">';
                      if(get_field('leader1_name')) {
                        echo '<h3>'. get_field("leader1_name") .'</h3>';
                      }
                      if(get_field('leader1_title')) {
                        echo '<h5>'. get_field("leader1_title") .'</h5>';
                      }
                      if(get_field('leader1_email')) {
                        echo '<a href="mailto:'. get_field("leader1_email") .'"><i class="fa fa-envelope" aria-hidden="true"></i></a>';
                      }
                      echo '
                      </div>
                    </div>
                  </div>';
          }
          if(get_field('leader2_image') || get_field('leader2_name') || get_field('leader2_title')) {
            echo '<div class="column">
                    <div class="card" data-equalizer-watch>';
                      if(get_field('leader2_image')) {
                        echo '<img src="'. get_field("leader2_image") .'" />';
                      }
                      echo'<div class="card-content">';
                      if(get_field('leader2_name')) {
                        echo '<h3>'. get_field("leader2_name") .'</h3>';
                      }
                      if(get_field('leader2_title')) {
                        echo '<h5>'. get_field("leader2_title") .'</h5>';
                      }
                      if(get_field('leader2_email')) {
                        echo '<a href="mailto:'. get_field("leader2_email") .'"><i class="fa fa-envelope" aria-hidden="true"></i></a>';
                      }
                      echo '
                      </div>
                    </div>
                  </div>';
          }
          if(get_field('leader3_image') || get_field('leader3_name') || get_field('leader3_title')) {
            echo '<div class="column">
                    <div class="card" data-equalizer-watch>';
                      if(get_field('leader3_image')) {
                        echo '<img src="'. get_field("leader3_image") .'" />';
                      }
                      echo'<div class="card-content">';
                      if(get_field('leader3_name')) {
                        echo '<h3>'. get_field("leader3_name") .'</h3>';
                      }
                      if(get_field('leader3_title')) {
                        echo '<h5>'. get_field("leader3_title") .'</h5>';
                      }
                      if(get_field('leader3_email')) {
                        echo '<a href="mailto:'. get_field("leader3_email") .'"><i class="fa fa-envelope" aria-hidden="true"></i></a>';
                      }
                      echo '
                      </div>
                    </div>
                  </div>';
          }
          if(get_field('leader4_image') || get_field('leader4_name') || get_field('leader4_title')) {
            echo '<div class="column">
                    <div class="card" data-equalizer-watch>';
                      if(get_field('leader4_image')) {
                        echo '<img src="'. get_field("leader4_image") .'" />';
                      }
                      echo'<div class="card-content">';
                      if(get_field('leader4_name')) {
                        echo '<h3>'. get_field("leader4_name") .'</h3>';
                      }
                      if(get_field('leader4_title')) {
                        echo '<h5>'. get_field("leader4_title") .'</h5>';
                      }
                      if(get_field('leader4_email')) {
                        echo '<a href="mailto:'. get_field("leader4_email") .'"><i class="fa fa-envelope" aria-hidden="true"></i></a>';
                      }
                      echo '
                      </div>
                    </div>
                  </div>';
          }
          if(get_field('leader5_image') || get_field('leader5_name') || get_field('leader5_title')) {
            echo '<div class="column">
                    <div class="card" data-equalizer-watch>';
                      if(get_field('leader5_image')) {
                        echo '<img src="'. get_field("leader5_image") .'" />';
                      }
                      echo'<div class="card-content">';
                      if(get_field('leader5_name')) {
                        echo '<h3>'. get_field("leader5_name") .'</h3>';
                      }
                      if(get_field('leader5_title')) {
                        echo '<h5>'. get_field("leader5_title") .'</h5>';
                      }
                      if(get_field('leader5_email')) {
                        echo '<a href="mailto:'. get_field("leader5_email") .'"><i class="fa fa-envelope" aria-hidden="true"></i></a>';
                      }
                      echo '
                      </div>
                    </div>
                  </div>';
          }
          if(get_field('leader6_image') || get_field('leader6_name') || get_field('leader6_title')) {
            echo '<div class="column">
                    <div class="card" data-equalizer-watch>';
                      if(get_field('leader6_image')) {
                        echo '<img src="'. get_field("leader6_image") .'" />';
                      }
                      echo'<div class="card-content">';
                      if(get_field('leader6_name')) {
                        echo '<h3>'. get_field("leader6_name") .'</h3>';
                      }
                      if(get_field('leader6_title')) {
                        echo '<h5>'. get_field("leader6_title") .'</h5>';
                      }
                      if(get_field('leader6_email')) {
                        echo '<a href="mailto:'. get_field("leader6_email") .'"><i class="fa fa-envelope" aria-hidden="true"></i></a>';
                      }
                      echo '
                      </div>
                    </div>
                  </div>';
          }
          if(get_field('leader7_image') || get_field('leader7_name') || get_field('leader7_title')) {
            echo '<div class="column">
                    <div class="card" data-equalizer-watch>';
                      if(get_field('leader7_image')) {
                        echo '<img src="'. get_field("leader7_image") .'" />';
                      }
                      echo'<div class="card-content">';
                      if(get_field('leader7_name')) {
                        echo '<h3>'. get_field("leader7_name") .'</h3>';
                      }
                      if(get_field('leader7_title')) {
                        echo '<h5>'. get_field("leader7_title") .'</h5>';
                      }
                      if(get_field('leader7_email')) {
                        echo '<a href="mailto:'. get_field("leader7_email") .'"><i class="fa fa-envelope" aria-hidden="true"></i></a>';
                      }
                      echo '
                      </div>
                    </div>
                  </div>';
          }
          if(get_field('leader8_image') || get_field('leader8_name') || get_field('leader8_title')) {
            echo '<div class="column">
                    <div class="card" data-equalizer-watch>';
                      if(get_field('leader8_image')) {
                        echo '<img src="'. get_field("leader8_image") .'" />';
                      }
                      echo'<div class="card-content">';
                      if(get_field('leader8_name')) {
                        echo '<h3>'. get_field("leader8_name") .'</h3>';
                      }
                      if(get_field('leader8_title')) {
                        echo '<h5>'. get_field("leader8_title") .'</h5>';
                      }
                      if(get_field('leader8_email')) {
                        echo '<a href="mailto:'. get_field("leader8_email") .'"><i class="fa fa-envelope" aria-hidden="true"></i></a>';
                      }
                      echo '
                      </div>
                    </div>
                  </div>';
          }
          if(get_field('leader9_image') || get_field('leader9_name') || get_field('leader9_title')) {
            echo '<div class="column">
                    <div class="card" data-equalizer-watch>';
                      if(get_field('leader9_image')) {
                        echo '<img src="'. get_field("leader9_image") .'" />';
                      }
                      echo'<div class="card-content">';
                      if(get_field('leader9_name')) {
                        echo '<h3>'. get_field("leader9_name") .'</h3>';
                      }
                      if(get_field('leader9_title')) {
                        echo '<h5>'. get_field("leader9_title") .'</h5>';
                      }
                      if(get_field('leader9_email')) {
                        echo '<a href="mailto:'. get_field("leader9_email") .'"><i class="fa fa-envelope" aria-hidden="true"></i></a>';
                      }
                      echo '
                      </div>
                    </div>
                  </div>';
          }
          if(get_field('leader10_image') || get_field('leader10_name') || get_field('leader10_title')) {
            echo '<div class="column">
                    <div class="card" data-equalizer-watch>';
                      if(get_field('leader10_image')) {
                        echo '<img src="'. get_field("leader10_image") .'" />';
                      }
                      echo'<div class="card-content">';
                      if(get_field('leader10_name')) {
                        echo '<h3>'. get_field("leader10_name") .'</h3>';
                      }
                      if(get_field('leader10_title')) {
                        echo '<h5>'. get_field("leader10_title") .'</h5>';
                      }
                      if(get_field('leader10_email')) {
                        echo '<a href="mailto:'. get_field("leader10_email") .'"><i class="fa fa-envelope" aria-hidden="true"></i></a>';
                      }
                      echo '
                      </div>
                    </div>
                  </div>';
          }
          if(get_field('leader11_image') || get_field('leader11_name') || get_field('leader11_title')) {
            echo '<div class="column">
                    <div class="card" data-equalizer-watch>';
                      if(get_field('leader11_image')) {
                        echo '<img src="'. get_field("leader11_image") .'" />';
                      }
                      echo'<div class="card-content">';
                      if(get_field('leader11_name')) {
                        echo '<h3>'. get_field("leader11_name") .'</h3>';
                      }
                      if(get_field('leader11_title')) {
                        echo '<h5>'. get_field("leader11_title") .'</h5>';
                      }
                      if(get_field('leader11_email')) {
                        echo '<a href="mailto:'. get_field("leader11_email") .'"><i class="fa fa-envelope" aria-hidden="true"></i></a>';
                      }
                      echo '
                      </div>
                    </div>
                  </div>';
          }
          if(get_field('leader12_image') || get_field('leader12_name') || get_field('leader12_title')) {
            echo '<div class="column">
                    <div class="card" data-equalizer-watch>';
                      if(get_field('leader12_image')) {
                        echo '<img src="'. get_field("leader12_image") .'" />';
                      }
                      echo'<div class="card-content">';
                      if(get_field('leader12_name')) {
                        echo '<h3>'. get_field("leader12_name") .'</h3>';
                      }
                      if(get_field('leader12_title')) {
                        echo '<h5>'. get_field("leader12_title") .'</h5>';
                      }
                      if(get_field('leader12_email')) {
                        echo '<a href="mailto:'. get_field("leader12_email") .'"><i class="fa fa-envelope" aria-hidden="true"></i></a>';
                      }
                      echo '
                      </div>
                    </div>
                  </div>';
            }
          if(get_field('leader13_image') || get_field('leader13_name') || get_field('leader13_title')) {
            echo '<div class="column">
                    <div class="card" data-equalizer-watch>';
                      if(get_field('leader13_image')) {
                        echo '<img src="'. get_field("leader13_image") .'" />';
                      }
                      echo'<div class="card-content">';
                      if(get_field('leader13_name')) {
                        echo '<h3>'. get_field("leader13_name") .'</h3>';
                      }
                      if(get_field('leader13_title')) {
                        echo '<h5>'. get_field("leader13_title") .'</h5>';
                      }
                      if(get_field('leader13_email')) {
                        echo '<a href="mailto:'. get_field("leader13_email") .'"><i class="fa fa-envelope" aria-hidden="true"></i></a>';
                      }
                      echo '
                      </div>
                    </div>
                  </div>';
            }
            if(get_field('leader14_image') || get_field('leader14_name') || get_field('leader14_title')) {
              echo '<div class="column">
                      <div class="card" data-equalizer-watch>';
                        if(get_field('leader14_image')) {
                          echo '<img src="'. get_field("leader14_image") .'" />';
                        }
                        echo'<div class="card-content">';
                        if(get_field('leader14_name')) {
                          echo '<h3>'. get_field("leader14_name") .'</h3>';
                        }
                        if(get_field('leader14_title')) {
                          echo '<h5>'. get_field("leader14_title") .'</h5>';
                        }
                        if(get_field('leader14_email')) {
                          echo '<a href="mailto:'. get_field("leader14_email") .'"><i class="fa fa-envelope" aria-hidden="true"></i></a>';
                        }
                        echo '
                        </div>
                      </div>
                    </div>';
              }
              if(get_field('leader15_image') || get_field('leader15_name') || get_field('leader15_title')) {
                echo '<div class="column">
                        <div class="card" data-equalizer-watch>';
                          if(get_field('leader15_image')) {
                            echo '<img src="'. get_field("leader15_image") .'" />';
                          }
                          echo'<div class="card-content">';
                          if(get_field('leader15_name')) {
                            echo '<h3>'. get_field("leader15_name") .'</h3>';
                          }
                          if(get_field('leader15_title')) {
                            echo '<h5>'. get_field("leader15_title") .'</h5>';
                          }
                          if(get_field('leader15_email')) {
                            echo '<a href="mailto:'. get_field("leader15_email") .'"><i class="fa fa-envelope" aria-hidden="true"></i></a>';
                          }
                          echo '
                          </div>
                        </div>
                      </div>';
                }
                if(get_field('leader16_image') || get_field('leader16_name') || get_field('leader16_title')) {
                  echo '<div class="column">
                          <div class="card" data-equalizer-watch>';
                            if(get_field('leader16_image')) {
                              echo '<img src="'. get_field("leader16_image") .'" />';
                            }
                            echo'<div class="card-content">';
                            if(get_field('leader16_name')) {
                              echo '<h3>'. get_field("leader16_name") .'</h3>';
                            }
                            if(get_field('leader16_title')) {
                              echo '<h5>'. get_field("leader16_title") .'</h5>';
                            }
                            if(get_field('leader16_email')) {
                              echo '<a href="mailto:'. get_field("leader16_email") .'"><i class="fa fa-envelope" aria-hidden="true"></i></a>';
                            }
                            echo '
                            </div>
                          </div>
                        </div>';
                  }
                  if(get_field('leader17_image') || get_field('leader17_name') || get_field('leader17_title')) {
                    echo '<div class="column">
                            <div class="card" data-equalizer-watch>';
                              if(get_field('leader17_image')) {
                                echo '<img src="'. get_field("leader17_image") .'" />';
                              }
                              echo'<div class="card-content">';
                              if(get_field('leader17_name')) {
                                echo '<h3>'. get_field("leader17_name") .'</h3>';
                              }
                              if(get_field('leader17_title')) {
                                echo '<h5>'. get_field("leader17_title") .'</h5>';
                              }
                              if(get_field('leader17_email')) {
                                echo '<a href="mailto:'. get_field("leader17_email") .'"><i class="fa fa-envelope" aria-hidden="true"></i></a>';
                              }
                              echo '
                              </div>
                            </div>
                          </div>';
                    }
                    if(get_field('leader18_image') || get_field('leader18_name') || get_field('leader18_title')) {
                      echo '<div class="column">
                              <div class="card" data-equalizer-watch>';
                                if(get_field('leader18_image')) {
                                  echo '<img src="'. get_field("leader18_image") .'" />';
                                }
                                echo'<div class="card-content">';
                                if(get_field('leader18_name')) {
                                  echo '<h3>'. get_field("leader18_name") .'</h3>';
                                }
                                if(get_field('leader18_title')) {
                                  echo '<h5>'. get_field("leader18_title") .'</h5>';
                                }
                                if(get_field('leader18_email')) {
                                  echo '<a href="mailto:'. get_field("leader18_email") .'"><i class="fa fa-envelope" aria-hidden="true"></i></a>';
                                }
                                echo '
                                </div>
                              </div>
                            </div>';
                      }
                      if(get_field('leader19_image') || get_field('leader19_name') || get_field('leader19_title')) {
                        echo '<div class="column">
                                <div class="card" data-equalizer-watch>';
                                  if(get_field('leader19_image')) {
                                    echo '<img src="'. get_field("leader19_image") .'" />';
                                  }
                                  echo'<div class="card-content">';
                                  if(get_field('leader19_name')) {
                                    echo '<h3>'. get_field("leader19_name") .'</h3>';
                                  }
                                  if(get_field('leader19_title')) {
                                    echo '<h5>'. get_field("leader19_title") .'</h5>';
                                  }
                                  if(get_field('leader19_email')) {
                                    echo '<a href="mailto:'. get_field("leader19_email") .'"><i class="fa fa-envelope" aria-hidden="true"></i></a>';
                                  }
                                  echo '
                                  </div>
                                </div>
                              </div>';
                        }
                      }
                      if(get_field('leader20_image') || get_field('leader20_name') || get_field('leader20_title')) {
                        echo '<div class="column">
                                <div class="card" data-equalizer-watch>';
                                  if(get_field('leader20_image')) {
                                    echo '<img src="'. get_field("leader20_image") .'" />';
                                  }
                                  echo'<div class="card-content">';
                                  if(get_field('leader20_name')) {
                                    echo '<h3>'. get_field("leader20_name") .'</h3>';
                                  }
                                  if(get_field('leader20_title')) {
                                    echo '<h5>'. get_field("leader20_title") .'</h5>';
                                  }
                                  if(get_field('leader20_email')) {
                                    echo '<a href="mailto:'. get_field("leader20_email") .'"><i class="fa fa-envelope" aria-hidden="true"></i></a>';
                                  }
                                  echo '
                                  </div>
                                </div>
                              </div>';
                        }
                        if(get_field('leader21_image') || get_field('leader21_name') || get_field('leader21_title')) {
                          echo '<div class="column">
                                  <div class="card" data-equalizer-watch>';
                                    if(get_field('leader21_image')) {
                                      echo '<img src="'. get_field("leader21_image") .'" />';
                                    }
                                    echo'<div class="card-content">';
                                    if(get_field('leader21_name')) {
                                      echo '<h3>'. get_field("leader21_name") .'</h3>';
                                    }
                                    if(get_field('leader21_title')) {
                                      echo '<h5>'. get_field("leader21_title") .'</h5>';
                                    }
                                    if(get_field('leader21_email')) {
                                      echo '<a href="mailto:'. get_field("leader21_email") .'"><i class="fa fa-envelope" aria-hidden="true"></i></a>';
                                    }
                                    echo '
                                    </div>
                                  </div>
                                </div>';
                          }
            ?>
          </div>
      </div>
      <div class="the-tags">
          <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
          <p><?php the_tags(); ?></p>
      </div>
      <?php do_action( 'foundationpress_page_before_comments' ); ?>
      <?php comments_template(); ?>
      <?php do_action( 'foundationpress_page_after_comments' ); ?>
  </article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
