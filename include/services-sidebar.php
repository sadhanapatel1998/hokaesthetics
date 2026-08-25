            <?php
            include('include/data.php');
            $currentPage = basename($_SERVER['PHP_SELF']);
            function serviceUrl($name)
            {
                return strtolower(trim(preg_replace('/[^A-Za-z0-9]+/', '-', $name), '-')) . '.php';
            }
            ?>
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar-card">
                        <div class="sidebar-title">Our Services</div>
                        <div class="accordion" id="serviceAccordion">
                            <?php foreach ($services as $categorySlug => $category): ?>
                                <?php
                                // Open accordion if any child page is active
                                $isActiveCategory = false;
                                foreach ($category['subs'] as $sub) {
                                    if (serviceUrl($sub['name']) == $currentPage) {
                                        $isActiveCategory = true;
                                        break;
                                    }
                                }
                                ?>
                                <div class="accordion-item">
                                    <button class="accordion-button <?= $isActiveCategory ? '' : 'collapsed'; ?>"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapse-<?= $categorySlug; ?>">
                                        <span class="d-flex align-items-center gap-2">
                                            <i class="<?= $category['icon']; ?>"></i>
                                            <?= $category['title']; ?>
                                        </span>
                                        <span class="ms-auto chevron">
                                            <i class="bi bi-chevron-down"></i>
                                        </span>
                                    </button>
                                    <div id="collapse-<?= $categorySlug; ?>"
                                        class="accordion-collapse collapse <?= $isActiveCategory ? 'show' : ''; ?>"
                                        data-bs-parent="#serviceAccordion">
                                        <?php foreach ($category['subs'] as $sub): ?>
                                            <?php $page = serviceUrl($sub['name']); ?>
                                            <a href="<?= $page; ?>"
                                                class="service-link <?= ($page == $currentPage) ? 'active' : ''; ?>">
                                                <i class="bi bi-dot"></i>
                                                <span><?= $sub['name']; ?></span>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>