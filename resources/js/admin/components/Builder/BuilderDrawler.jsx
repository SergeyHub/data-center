import React, { useContext } from 'react';
import { ContextBuilder } from '../../context/builder/reducers';
import { Drawer, Collapse, Popover } from 'antd';

const _ = require('lodash');
const { Panel } = Collapse;

const BuilderDrawler = () => {
  const { state, dispatch } = useContext(ContextBuilder);

  const onClick = (e) => {
    const type = e.target.getAttribute('type');
    const data = state.data;
    const id = data.value.length ? _.maxBy(data.value, 'id').id + 1 : 1;
    if (typeof state.drawler.childIndex !== 'number') {
      data.value.splice(state.drawler.index, 0, { id: id, type: type, content: '' });
    } else {
      data.value[state.drawler.index].content[state.drawler.childIndex] = { id: id, type: type, content: '' };
    }

    dispatch({ type: 'data', payload: { data: data } });
    closeDrawler();
  };

  const closeDrawler = () => {
    dispatch({
      type: 'drawler',
      payload: {
        drawler: {
          visible: false,
          index: null,
          allowedElements: []
        }
      }
    });
  };

  const popoverContent = (description, img) => {
    return (
      <div>
        <img style={{ maxWidth: 500 }} src={img} alt={description} />
      </div>
    );
  };

  const allowed = () => {
    return (<Collapse expandIconPosition="right" bordered={false} defaultActiveKey={['1']}>
      {
        state.drawler.allowedElements.map((item, i) => {
          return (
            <Panel header={item.category} key={`header${i}`}>
              {
                item.elements.map((item, i) => {
                  return (
                    <Popover key={i} overlayStyle={{ width: 530, height: 'max-content' }} className="drawler__item" placement="left" title={item.description} content={popoverContent(item.description, item.img)}>
                      <p type={item.type} onClick={onClick}>{item.name}</p>
                    </Popover>
                  );
                })
              }
            </Panel>
          );
        })
      }
    </Collapse>);
  };

  return (
    <div>
      <Drawer
        className="builder-drawler"
        title="Доступные элементы"
        placement="right"
        closable={false}
        onClose={closeDrawler}
        visible={state.drawler.visible}
      >
        {allowed()}
      </Drawer>
    </div>
  );
};

export default BuilderDrawler;
