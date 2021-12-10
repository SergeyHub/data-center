import React, { useContext } from 'react';
import AddElementButton from './Elements/AddElementButton';
import MoveButton from './Elements/MoveButton';
import DeleteButton from './Elements/DeleteButton';
import { ContextBuilder } from '../../context/builder/reducers';
import TwoCols from './Elements/TwoCols';
import Images from './Elements/Images';
import TinyMce from './Elements/TinyMce';
import ColoredIconsList from './Elements/ColoredIconsList/ColoredIconsList';
import HeaderComponent from './Elements/Header/HeaderComponent';
import IconsList from './Elements/IconsList/IconsList';
import CheckedList from './Elements/CheckedList/CheckedList';
import QnA from './Elements/QnA/QnA';
import LogosList from './Elements/LogosList/LogosList';
import ImageComponent from './Elements/Image/ImageComponent';
import QuoteComponent from './Elements/Quote/QuoteComponent';
import SimpleListComponent from './Elements/SimpleList/SimpleListComponent';
import CardList from './Elements/Cards/CardList';
import Map from './Elements/Map';
import HeaderService from './Elements/HeaderService/HeaderServiceComponent';
import TextBtnComponent from './Elements/TextBtn/TextBtnComponent';
import ThreeCols from './Elements/ThreeCols';
import ColorColumns from './Elements/ColorColumns/ColorColumns';
import TabsComponent from './Elements/Tabs/TabsComponent';
import Vacancy from './Elements/Vacancy/Vacancy';
import VacancyQuote from './Elements/Vacancy/VacancyQuote';
import VacancyInternshipText from './Elements/Vacancy/VacancyInternshipText';
import FreeConsultation from './Elements/FreeConsultation/FreeConsultation';
import PromoForm from './Elements/PromoForm/PromoForm';
import ResearchGallery from './Elements/Research/Gallery';
import ResearchQuotes from './Elements/Research/Quotes';
import ResearchCompanies from './Elements/Research/Companies';
import ResearchBanner from './Elements/Research/Banner';
import ReviewsComponent from './Elements/Reviews/ReviewsComponent';
import DocsForm from './Elements/Docs/DocsFormComponent';
import CompanyHistoryComponent from './Elements/CompanyHistory/CompanyHistoryComponent';
import RelatedPagesComponent from './Elements/RelatedPages/RelatedPagesComponent';
import SolutionOption from './Elements/SolutionOption/SolutionOption';

const Builder = () => {
  const { state } = useContext(ContextBuilder);

  const allowedElements = [
    {
      category: 'Общие',
      elements: [
        { type: 'header-banner', name: 'Header с картинкой', description: 'Header с картинкой.', img: '/images/admin/header_sample.png' },
        { type: 'tinymce', name: 'Текст', description: 'Текстовый блок с расширенными возможностями редактирования.', img: '/images/admin/text_sample.png' },
        { type: 'two_cols', name: 'Две колонки', description: 'Блок с двумя колонками.', img: '/images/admin/two_columns_sample.png' },
        { type: 'three_cols', name: 'Три колонки', description: 'Блок с двумя колонками.', img: null },
        { type: 'images', name: 'Галерея', description: 'Блок с изображениями.', img: '/images/admin/images_sample.png' },
        { type: 'colored_icons_list', name: 'Блок с цветными иконками', description: 'Блок с цветными иконками.', img: '/images/admin/colored_icons_sample.png' },
        { type: 'icons_list', name: 'Блок с иконками', description: 'Блок с иконками.', img: '/images/admin/icons_sample.png' },
        { type: 'icons_list_vertical', name: 'Блок с иконками вертикальный', description: 'Блок с иконками(вертикальный).', img: null },
        { type: 'icons_list_steps', name: 'Блок с иконками >>>', description: 'Блок с иконками >>>.', img: null },
        { type: 'checked_list', name: 'Блок с чекбоксами', description: 'Блок с чекбоксами.', img: '/images/admin/checkboxes_sample.png' },
        { type: 'questions_answers', name: 'Блок с вопросами', description: 'Блок с вопросами.', img: '/images/admin/qna_sample.png' },
        { type: 'logos_list', name: 'Блок с логотипами', description: 'Блок с логотипами.', img: '/images/admin/logos_list_sample.png' },
        { type: 'simple-icon-list', name: 'Список с иконками', description: 'Блок - простой список с иконками', img: '' },
        { type: 'image', name: 'Изображение', description: 'Блок с изображением', img: '/images/admin/img.png' },
        { type: 'quote', name: 'Цитата', description: 'Блок с цитатой', img: '/images/admin/quote.png' },
        { type: 'cards', name: 'Карточки', description: 'Блок с карточками', img: null },
        { type: 'grey-cards', name: 'Grey cards', description: 'Блок с карточками на сером фоне', img: '/images/admin/grey-cards.png' },
        { type: 'yamap', name: 'Карта', description: 'Блок с картой', img: null },
        { type: 'header-service', name: 'Заголовок для сервиса', description: 'Заголовок для сервиса', img: '/images/admin/header_service.png' },
        { type: 'text-btn', name: 'Текст с кнопкой', description: 'Текст с кнопкой', img: '/images/admin/text_with_btn.png' },
        { type: 'color-columns', name: 'Блок с цветными колонками', description: 'Блок с цветными колонками', img: '/images/admin/color-columns.png' },
        { type: 'tabs', name: 'Блок с вкладками', description: 'Блок с вкладками', img: '/images/admin/tabs.png' },
        { type: 'free-consultation', name: 'Бесплатная консультация', description: 'Форма - бесплатная консультация', img: '/images/admin/free-consultation.png' },
        { type: 'promo-form', name: 'Воспользуйся акцией', description: 'Форма - Воспользуйся акцией "Нового года"', img: '/images/admin/free-consultation.png' },
        { type: 'reviews', name: 'Отзывы клиентов', description: 'Отзывы клиентов', img: '/images/admin/reviews.png' },
        { type: 'feedback', name: 'Форма обратной связи', description: 'Форма обратной связи', img: '/images/admin/feedback-form.png' },
        { type: 'related-pages', name: 'Вас также заинтересует', description: 'Похожие страницы', img: '/images/admin/related-pages.png' }
      ]
    },
    {
      category: 'Готовые блоки',
      elements: [
        { type: 'news-categories', name: 'Категории - новости', description: 'Блок категорий новостей', img: '/images/admin/news-categories.png' },
        { type: 'calendar', name: 'Календарь', description: 'Календарь', img: '/images/admin/calendar.png' },
        { type: 'news', name: 'Блок с новостями', description: 'Блок с новостями', img: '/images/admin/news.png' },
        { type: 'news-last', name: 'Последние новости', description: 'Блок с последними новостями', img: '/images/admin/news.png' },
        { type: 'dc-map', name: 'Карта дата-центров', description: 'Карта дата-центров', img: null },
        { type: 'videos', name: 'Видео-лекторий', description: 'Видео-лекторий', img: '/images/admin/video-lektory/screenshot.png' },
        { type: 'advantage-cloud', name: 'Преимущества размещения в облаке', description: 'Преимущества размещения в облаке', img: '/images/admin/advantage-cloud.png' },
        { type: 'sap', name: 'Sap', description: 'Соответствует требованиям SAP', img: null },
        { type: 'calculator', name: 'Калькулятор', description: 'Соответствует требованиям SAP', img: null },
        { type: 'services-cards', name: 'Популярные сервисы', description: 'Популярные сервисы', img: null },
        { type: 'services-interest', name: 'Сервисы - "Вас также заинтересует"', description: 'Сервисы - "Вас также заинтересует"', img: null },
        { type: 'certificates', name: 'Лицензии и сертификаты', description: 'Лицензии и сертификаты', img: null },
        { type: 'docs', name: 'Документы', description: 'Документы', img: null },
        { type: 'veeam', name: 'Veeam', description: 'Применение решений Veeam', img: '/images/admin/veeam.png' },
        { type: 'information-center', name: 'Пресс-центр', description: 'Пресс-центр', img: null },
        { type: 'docs', name: 'Документы', description: 'Список документов', img: '/images/admin/docs/list.png' },
        { type: 'image-figures', name: 'Блок с картинками и подписями', description: 'Блок с картинками и подписями', img: '' },
        { type: 'solution-option', name: 'Варианты решения', description: 'Варианты решения', img: '' }
      ]
    },
    {
      category: 'Вакансии и стажировки',
      elements: [
        { type: 'vacancy.vacancy', name: 'Вакансии', description: 'Вакансии: Новости, Вакансии, Форма', img: '/images/admin/vacancy/vacancies.png' },
        { type: 'vacancy.vacancies', name: 'Открытые вакансии', description: 'Вакансии: Открытые вакансии', img: '/images/admin/vacancy/vacancies.png' },
        { type: 'vacancy.vacancy_badges', name: 'Вакансии: Значки', description: 'Вакансии: Значки', img: '/images/admin/vacancy/badges.png' },
        { type: 'vacancy.vacancy_quote', name: 'Вакансии: Цитаты', description: 'Вакансии: Цитаты', img: '/images/admin/vacancy/quotes.png' },
        { type: 'vacancy.vacancy_internship', name: 'Вакансии: Стажировка', description: 'Вакансии: Стажировка', img: '/images/admin/vacancy/internship.png' }
      ]
    },
    {
      category: 'Исследование по облачным сервисам',
      elements: [
        { type: 'research.gallery', name: 'Галерея с текстом', description: 'Галерея с текстом', img: null },
        { type: 'research.quotes', name: 'Цитаты', description: 'Цитаты', img: '/images/admin/research/quotes.png' },
        { type: 'research.form', name: 'Форма', description: 'Форма', img: '/images/admin/research/form.png' },
        { type: 'research.companies', name: 'Компании', description: 'Компании', img: '/images/admin/research/companies.png' },
        { type: 'research.banner', name: 'CTA баннер', description: 'CTA баннер', img: '/images/admin/research/banner.png' }
      ]
    },
    {
      category: 'О нас',
      elements: [
        { type: 'about-us.team_office', name: 'Наша команда', description: 'Наша команда', img: null },
        { type: 'about-us.team_list', name: 'Team list', description: 'Team list', img: null },
        { type: 'about-us.team_slider', name: 'Team slider', description: 'Team slider', img: null },
        { type: 'about-us.company-history', name: 'История компании', description: 'История компании', img: null }
      ]
    }
  ];

  const getElement = (element, index) => {
    if (element.type === 'two_cols') {
      return (
        <TwoCols
          index={index}
          content={element.content}
          title={element.title}
          background={element.background}
        />
      );
    }

    if (element.type === 'color-columns') {
      return (
        <ColorColumns index={index} content={element.content} />
      );
    }

    if (element.type === 'three_cols') {
      return (
        <ThreeCols
          index={index}
          content={element.content}
          background={element.background}
          title={element.title}
        />
      );
    }

    if (element.type === 'feedback') {
      return <div><h3>Форма обратной связи</h3></div>;
    }

    if (element.type === 'about-us.team_office') {
      return <div><h3>Наша команда</h3></div>;
    }

    if (element.type === 'about-us.team_slider') {
      return <div><h3>Team slider</h3></div>;
    }

    if (element.type === 'about-us.team_list') {
      return <div><h3>Team list</h3></div>;
    }

    if (element.type === 'related-pages') {
      return <RelatedPagesComponent type={element.type} index={index} content={element.content} />;
    }

    if (element.type === 'about-us.company-history') {
      return <CompanyHistoryComponent type={element.type} index={index} content={element.content} />;
    }

    if (element.type === 'research.gallery') {
      return <ResearchGallery type={element.type} index={index} content={element.content} />;
    }

    if (element.type === 'research.quotes') {
      return <ResearchQuotes type={element.type} index={index} content={element.content} />;
    }

    if (element.type === 'research.companies') {
      return <ResearchCompanies type={element.type} index={index} content={element.content} />;
    }

    if (element.type === 'research.banner') {
      return <ResearchBanner type={element.type} index={index} content={element.content} />;
    }

    if (element.type === 'reviews') {
      return <ReviewsComponent index={index} content={element.content} />;
    }

    if (element.type === 'information-center') {
      return <div><h3>Пресс центр</h3></div>;
    }

    if (element.type === 'vacancy.vacancies') {
      return <div><h3>Вакансии: Открытые вакансии</h3></div>;
    }

    if (element.type === 'free-consultation') {
      return <FreeConsultation type={element.type} index={index} content={element.content} />;
    }

    if (element.type === 'promo-form') {
      return <PromoForm type={element.type} index={index} content={element.content} />;
    }

    if (element.type === 'vacancy.vacancy_internship') {
      return <VacancyInternshipText type={element.type} index={index} content={element.content} />;
    }

    if (element.type === 'vacancy.vacancy_quote') {
      return <VacancyQuote type={element.type} index={index} content={element.content} />;
    }

    if (element.type === 'vacancy.vacancy_badges') {
      return <Vacancy type={element.type} index={index} content={element.content} />;
    }

    if (element.type === 'docs') {
      return (
        <div>
          <h3>Документы</h3><i>Список документов</i>
          <DocsForm index={index} content={element.content} />
        </div>
      );
    }

    if (element.type === 'text-btn') {
      return <TextBtnComponent index={index} content={element.content} />;
    }

    if (element.type === 'header-service') {
      return <HeaderService index={index} content={element.content} />;
    }

    if (element.type === 'tabs') {
      return <TabsComponent index={index} content={element.content} />;
    }

    if (element.type === 'veeam') {
      return <div><h3>Veeam</h3></div>;
    }

    if (element.type === 'research.form') {
      return <div><h3>Форма</h3><h5>Форма: Исследование по облачным сервисам</h5></div>;
    }

    if (element.type === 'vacancy.vacancy') {
      return <div><h3>Вакансии</h3><h5>Вакансии: Новости, Вакансии, Форма</h5></div>;
    }

    if (element.type === 'certificates') {
      return <div><h3>Лицензии и сертификаты</h3></div>;
    }

    if (element.type === 'services-cards') {
      return <div><h3>Популярные сервисы</h3></div>;
    }

    if (element.type === 'services-interest') {
      return <div><h3>Сервисы - Вас заинтересует</h3></div>;
    }

    if (element.type === 'calculator') {
      return <div><h3>Калькулятор</h3></div>;
    }

    if (element.type === 'key-advantage') {
      return <div><h3>Ключевые преимущества</h3></div>;
    }

    if (element.type === 'advantage-cloud') {
      return <div><h3>Преимущества размещения в облаке</h3></div>;
    }

    if (element.type === 'sap') {
      return <div><h3>SAP</h3></div>;
    }

    if (element.type === 'yamap') {
      return <Map index={index} content={element.content} />;
    }

    if (element.type === 'cards') {
      return <CardList index={index} content={element.content} />;
    }

    if (element.type === 'grey-cards') {
      return <CardList index={index} content={element.content} />;
    }

    if (element.type === 'quote') {
      return <QuoteComponent index={index} content={element.content} />;
    }

    if (element.type === 'image') {
      return <ImageComponent index={index} content={element.content} />;
    }

    if (element.type === 'videos') {
      return <div><h3>Видео-лекторий</h3></div>;
    }

    if (element.type === 'dc-map') {
      return <div><h3>Карта дата-центров</h3></div>;
    }

    if (element.type === 'cod-tabs') {
      return <div><h3>Дата центры</h3></div>;
    }

    if (element.type === 'calendar') {
      return <div><h3>Календарь</h3></div>;
    }

    if (element.type === 'news-categories') {
      return <div><h3>Блок с категориями новостей</h3></div>;
    }

    if (element.type === 'news-categories') {
      return <div><h3>Блок с категориями новостей</h3></div>;
    }

    if (element.type === 'news-last') {
      return <div><h3>Блок с последними новостями</h3></div>;
    }

    if (element.type === 'news') {
      return <div><h3>Блок с новостями</h3></div>;
    }

    if (element.type === 'tinymce') {
      return <TinyMce
        key={`tiny_${index}`}
        id={`tiny_${element.id}`}
        value={element.content}
        background={element.background}
        index={index}
        name="content"
      />;
    }

    if (element.type === 'images') {
      return <Images
        index={index}
        content={element.content}
        cols="5"
      />;
    }

    if (element.type === 'colored_icons_list') {
      return <ColoredIconsList index={index} content={element.content} />;
    }

    if (element.type === 'header-banner') {
      return <HeaderComponent index={index} content={element.content} />;
    }

    if (element.type === 'icons_list') {
      return <IconsList type={element.type} index={index} content={element.content} />;
    }

    if (element.type === 'icons_list_steps') {
      return <IconsList type={element.type} index={index} content={element.content}/>;
    }

    if (element.type === 'icons_list_vertical') {
      return <IconsList type={element.type} index={index} content={element.content}/>;
    }

    if (element.type === 'simple-icon-list') {
      return <SimpleListComponent index={index} content={element.content} />;
    }

    if (element.type === 'checked_list') {
      return <CheckedList index={index} content={element.content} />;
    }

    if (element.type === 'questions_answers') {
      return <QnA index={index} content={element.content} />;
    }

    if (element.type === 'logos_list') {
      return <LogosList index={index} content={element.content} />;
    }

    if (element.type === 'image-figures') {
      return <div><h3>Блок с картинками</h3></div>;
    }
    if (element.type === 'solution-option') {
      return <SolutionOption type={element.type} index={index} content={element.content}/>;
    }
  };

  const elements = () => {
    return state.data.value.map((element, index) =>
      <div key={element.id} className="element">
        <div className="item">
          <div className="content">
            {getElement(element, index)}
          </div>
          <div className="controls">
            <MoveButton
              onClick={() => {}}
              currentIndex={index}
              newIndex={index - 1}
              total={state.data.value.length}
            />

            <DeleteButton index={index} />

            <MoveButton
              currentIndex={index}
              newIndex={index + 1}
              total={state.data.value.length}
            />
          </div>
        </div>
        <AddElementButton allowedElements={allowedElements} index={index + 1}/>
      </div>
    );
  };

  return (
    <div>
      <AddElementButton allowedElements={allowedElements} index={0}/>
      {elements()}
      <div className="mt-4" style={{ display: 'none' }}>
        <textarea
          name={state.data.name}
          value={JSON.stringify(state.data.value)}
          readOnly
          className="form-control"
          rows="10"
        ></textarea>
      </div>
    </div>
  );
};

export default Builder;
